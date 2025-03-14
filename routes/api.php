<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/reset-password', [AuthController::class, 'resetPassword']);
Route::get('/reset-password/{token}', function ($token) {
    // return response()->json([
    //     'message' => 'Đây là route reset password!',
    //     'token' => $token
    // ]);
    return view('auth.reset-password', ['token' => $token]);
})->name('password.reset');
Route::middleware(['auth:api'])->group(function () {
    Route::post('/logout', [AuthController::class, "logout"]);
    // api cho Admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/users', [UserController::class, 'index']);  // Lấy danh sách user
        Route::get('/users/{id}', [UserController::class, 'show']); // Lấy user theo ID
        Route::put('/users/{id}', [UserController::class, 'update']); // Cập nhật user
        Route::delete('/users/{id}', [UserController::class, 'destroy']); // Xóa user
    });

    // API cho User
    Route::get('/me', [UserController::class, 'me']);
    Route::put('/me', [UserController::class, 'updateMe']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return response()->json(['user' => $request->user()]);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
