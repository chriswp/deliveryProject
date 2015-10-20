<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'product_id', 'price', 'quantidade'];

    public function products()
    {
        $this->belongsTo(Product::class);
    }

    public function order()
    {
        $this->belongsTo(order::class);
    }
}
