<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class)
            ->select('order_items.*', 'products.name', 'products.product_image_url' ,'products.price as product_price' )
            ->leftJoin('products', function ($join) {
                $join->on('order_items.product_id', '=', 'products.id');
            });
    }
}
