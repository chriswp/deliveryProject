<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['client_id', 'user_delivery_id', 'total', 'status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function userDelivery()
    {
        return $this->belongsTo(User::class);
    }
}
