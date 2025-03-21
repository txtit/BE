<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'total',
        'user_id',
        'product_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    // Đổi tên phương thức từ 'product' thành 'products'
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')
            ->withPivot('quantity', 'price'); // Lấy thêm các trường từ bảng trung gian
    }
}
