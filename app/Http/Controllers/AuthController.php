<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    // Dang ky 
    public function register(Request $request)
    {
        // validate du lieu 
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // bat loi
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // tao user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'message' => 'Đăng ký thành công!',
            'user' => $user
        ], 201);
    }
    //Dang nhap 
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['error' => 'Sai thông tin đăng nhập'], 401);
        }

        return $this->respondWithToken($token);
    }

    // dang xuat 
    public function logout(Request $request)
    {
        $token = $request->bearerToken(); // Lấy token từ request

        if (!$token) {
            return response()->json(['message' => 'Không có token'], 400);
        }
        try {
            // huy bo token hien tai
            JWTAuth::invalidate(JWTAuth::getToken());
            return response()->json(['message' => 'Đăng xuất thành công']);
        } catch (Exception $e) {
            return response()->json(['error' => 'Không thể đăng xuất'], 500);
        }
    }
    // quen mat khau
    public function forgotPassword(Request $request)
    {
        // kiem tra email co ton tai hay khong
        $request->validate(['email' => 'required|email|exists:users,email']);
        // gui email dat lai mat khau
        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => 'Đã gửi email dặt lại mật khẩu!'])
            : response()->json(['error' => 'Gửi email thất bại!'], 500);
    }

    // dat lai mat khau
    public function resetPassword(Request $request)
    {
        // kiem tra du lieu dau vao 
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|min:6|confirmed'
        ]);

        // dat lai mat khau 
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user,  $password) {
                $user->password = bcrypt($password);
                $user->save();
            }
        );

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => 'Mật khẩu dã được đặt lại thành công!'])
            : response()->json(['error' => 'Token không hợp lệ!'], 500);
    }

    // lay thong tin nguoi dung
    public function me()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
        ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'role' => auth()->user()->role,
            'name' => auth()->user()->name,
            'access_token' => $token,
            'token_type' => 'bearer',
            // 'expires_in' => auth()->factory()->getTTL() * 60
            'expires_in' => config('jwt.ttl') * 60

        ]);
    }
    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);
    }
}
