<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    // Lấy danh sách sản phẩm
    public function index()
    {
        $products = Category::all();
        return response()->json($products);
    }

    // Thêm sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'string'
        ]);

        $product = Category::create($request->all());

        return response()->json($product, 201);
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        $product = Category::findOrFail($id);
        return response()->json($product);
    }

    // Cập nhật sản phẩm
    public function update(Request $request, $id)
    {
        $product = Category::findOrFail($id);
        $product->update($request->all());

        return response()->json($product);
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $product = Category::findOrFail($id);
        $product->delete();

        return response()->json(['message' => 'Product deleted']);
    }
}
