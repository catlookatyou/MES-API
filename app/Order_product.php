<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_product extends Model
{
    protected $table = 'order_product';

    public function orders()
    {
        return $this->belongsTo('App\Order');
    }
}
