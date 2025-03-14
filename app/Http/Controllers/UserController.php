<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // api lay danh sach user (admin)
    public function index()
    {
        return response()->json(User::all());
    }

    // api lau thong tin user theo id (admin)
    public function show($id)
    {
        return response()->json(User::findOrFail($id));
    }

    // api cap nhat user theo id (admin )
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->only(['name', 'email', 'role']));

        return response()->json(['message' => "User updated succesdully!", "user" => $user]);
    }
    // api cap nhat thong tin user dang dang nhap (User)


    // api xoa user theo id (admin)
    public function destroy($id)
    {
        User::destroy($id);
        return response()->json(['message' => "User deleted successfully!"]);
    }

    // api lay thong tin user dang dang nhap (User)
    public function me()
    {
        return response()->json(Auth::user());
    }
    // api cap nhat thong tin user dang dang nhap (User)
    public function updateMe(Request $request)
    {
        $user = Auth::user();
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        $user->name = $request->input('name', $user->name);
        $user->email = $request->input('email', $user->email);
        return response()->json(['message' => 'Profile updated successfully!', 'user' => $user]);
    }

    // api cap nhat mat khau user dang dang nhap (User)
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // kiem tra du lieu dau vao
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);
        // kiem tra mat khau hien tai co dung khong
        
    }
}
