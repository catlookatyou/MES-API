<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stuff_selfmade extends Model
{
    protected $table = 'self_made_stuff';

    public function stuffs(){
        return $this->hasMany('App\Stuff');
    }

    public function self_made()
    {
        return $this->belongsTo('App\Self_made');
    }
}
