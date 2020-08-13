<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Tool extends Model
{
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function tool_selfmade()
    {
        return $this->belongsTo('App\Tool_selfmade');
    }
}
