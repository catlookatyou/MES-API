<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Machine extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function machine_selfmade()
    {
        return $this->belongsTo('App\Machine_selfmade');
    }
}
