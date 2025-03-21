<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('order', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('order/{id}', [OrderController::class, 'getOrderDetail']);
Route::get('productNear/{id}', [OrderController::class, 'getLatestUserOrderProducts']);
Route::delete('order/{id}', [OrderController::class, 'destroy']);

Route::get('category', [CategoryController::class, 'index']);
Route::post('category', [CategoryController::class, 'store']);
Route::get('category/{id}', [CategoryController::class, 'show']);
Route::put('category/{id}', [CategoryController::class, 'update']);
Route::delete('category/{id}', [CategoryController::class, 'destroy']);

Route::get('products', [ProductController::class, 'index']);
Route::post('products', [ProductController::class, 'store']);
Route::get('products/{id}', [ProductController::class, 'show']);
Route::put('products/{id}', [ProductController::class, 'update']);
Route::delete('products/{id}', [ProductController::class, 'destroy']);

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


    //Admin quan ly san pham 
    // Route::middleware(['admin'])->group(function () {

    // });
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
