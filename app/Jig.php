<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Jig extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function jig_selfmade()
    {
        return $this->belongsTo('App\Jig_selfmade');
    }
}
