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
        $categories = Category::all();
        return response()->json($categories);
    }

    // Thêm sản phẩm mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'string'
        ]);

        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    // Cập nhật sản phẩm
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->update($request->all());

        return response()->json($category);
    }

    // Xóa sản phẩm
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json(['message' => 'Category deleted']);
    }
}
