<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Spatie\FlareClient\Http\Response as FlareClientHttpResponse;

class OrderController extends Controller
{
    //
    /**
     * Hiển thị danh sách các đơn hàng.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with(['user', 'products'])->get(); // Load quan hệ user và product
        return response()->json($orders, Response::HTTP_OK);
    }

    /**
     * Lưu một đơn hàng mới.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate request data
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'products' => 'required|array|min:1', // Mảng các sản phẩm
            'products.*.product_id' => 'required|exists:products,id', // ID sản phẩm
            'products.*.quantity' => 'required|integer|min:1', // Số lượng sản phẩm
        ]);

        // Bắt đầu transaction
        DB::beginTransaction();
        try {
            // Tính tổng giá trị đơn hàng
            $totalPrice = 0;
            $productIds = array_column($request->products, 'product_id');
            $products = Product::whereIn('id', $productIds)->get()->keyBy('id');

            foreach ($request->products as $item) {
                $product = $products[$item['product_id']];
                $totalPrice += $product->price * $item['quantity'];
            }

            // Tạo đơn hàng
            $order = Order::create([
                'name' => "donhang" . str_pad(random_int(0, 9999), 4, '0', STR_PAD_LEFT),
                'user_id' => $request->user_id,
                'total_price' => $totalPrice,
            ]);

            // Lưu thông tin sản phẩm vào bảng trung gian order_product
            foreach ($request->products as $item) {
                $order->products()->attach($item['product_id'], [
                    'quantity' => $item['quantity'],
                    'price' => $products[$item['product_id']]->price, // Lưu giá tại thời điểm đặt hàng
                ]);
            }

            // Commit transaction
            DB::commit();

            // Trả về response
            return response()->json([
                'message' => 'Order created successfully',
                'order' => $order->load('products'), // Load thông tin sản phẩm
            ], Response::HTTP_CREATED);
        } catch (\Exception $e) {
            // Rollback transaction nếu có lỗi
            DB::rollBack();
            return response()->json([
                'error' => 'An error occurred while creating the order: ' . $e->getMessage(),
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Hiển thị thông tin một đơn hàng cụ thể.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */

    // public function getLatestUserOrderProducts($userId)
    // {
    //     $latestOrder = Order::where('user_id', $userId)->with('products')->latest()->first();

    //     if (!$latestOrder) {
    //         return response()->json(['message' => 'No orders found for this user'], 404);
    //     }

    //     return response()->json([
    //         'order_id' => $latestOrder->id,
    //         'created_at' => $latestOrder->created_at->format('Y-m-d H:i:s'),
    //         'products' => $latestOrder->products->map(function ($product) {
    //             return [
    //                 'id' => $product->id,
    //                 'name' => $product->name,
    //                 'image' => $product->image,
    //                 'price' => $product->price,
    //                 'quantity' => $product->pivot->quantity ?? 1, // Lấy số lượng từ bảng order_product
    //             ];
    //         }),
    //     ]);
    // }

    public function getLatestUserOrderProducts($userId)
    {
        // Tìm đơn hàng gần nhất của người dùng
        $latestOrder = Order::where('user_id', $userId)
            ->with('products.category') // Load sản phẩm và danh mục của sản phẩm
            ->latest()
            ->first();

        if (!$latestOrder) {
            return response()->json(['message' => 'No orders found for this user'], 404);
        }

        // Lấy danh mục của đơn hàng (giả sử danh mục được lấy từ sản phẩm đầu tiên trong đơn hàng)
        $category = $latestOrder->products->first()->category;

        if (!$category) {
            return response()->json(['message' => 'No category found for the latest order'], 404);
        }

        // Lấy tất cả sản phẩm thuộc danh mục đó
        $productsInCategory = Product::where('category_id', $category->id)->get();

        // Trả về kết quả
        return response()->json([
            'order_id' => $latestOrder->id,
            'created_at' => $latestOrder->created_at->format('Y-m-d H:i:s'),
            'category' => [
                'id' => $category->id,
                'name' => $category->name,
            ],
            'products' => $productsInCategory->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'image' => $product->image,
                    'price' => $product->price,
                ];
            }),
        ]);
    }


    public function getOrderDetail($orderId)
    {
        $order = Order::with(['user', 'products'])->find($orderId);
        if (!$order) {
            return response()->json(['message' => 'Order not found'], 404);
        }

        return response()->json([
            'id' => $order->id,
            'name' => $order->name,
            'description' => $order->description,
            'total' => $order->total,
            'created_at' => $order->created_at->format('Y-m-d H:i:s'),
            'user' => [
                'id' => $order->user->id ?? null,
                'name' => $order->user->name ?? 'N/A',
                'email' => $order->user->email ?? 'N/A',
            ],
            'products' => $order->products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $product->pivot->quantity ?? 1, // Lấy số lượng từ bảng trung gian order_product
                ];
            }),
        ]);
    }


    public function show(Order $order)
    {
        // Load user và products (bao gồm dữ liệu từ bảng pivot)
        $order->load(['user:id,name,email', 'products:id,name,price,stock,category_id,description,image']);

        // Tính tổng giá trị đơn hàng dựa vào giá trong bảng pivot
        $totalPrice = $order->products->sum(fn($product) => $product->pivot->price * $product->pivot->quantity);
        dd($order);

        return response()->json([
            'id' => $order->id,
            'name' => $order->name,
            'total' => $totalPrice, // Tổng tiền đơn hàng từ bảng pivot
            'description' => $order->description,
            'status' => $order->status,

            'created_at' => $order->created_at->format('Y-m-d H:i:s'), // Hiển thị thời gian tạo
            'user' => [
                'id' => $order->user->id,
                'name' => $order->user->name,
                'email' => $order->user->email,
            ],
            'products' => $order->products->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'price' => $product->pivot->price, // Giá từ bảng pivot
                    'stock' => $product->stock,
                    'category_id' => $product->category_id,
                    'quantity' => $product->pivot->quantity, // Số lượng từ bảng pivot
                    'subtotal' => $product->pivot->price * $product->pivot->quantity, // Tổng tiền từng sản phẩm
                ];
            }),
        ], Response::HTTP_OK);
    }


    /**
     * Cập nhật thông tin một đơn hàng.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'name' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'total' => 'sometimes|numeric',
            'user_id' => 'sometimes|exists:users,id',
            'product_id' => 'sometimes|exists:products,id',
        ]);

        $order->update($request->all());
        return response()->json($order, Response::HTTP_OK);
    }

    /**
     * Xóa một đơn hàng.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
