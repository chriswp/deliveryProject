<?php

namespace Delivery\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['user_id', 'address', 'phone', 'postcode', 'city', 'state'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
