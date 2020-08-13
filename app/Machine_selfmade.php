<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine_selfmade extends Model
{
    protected $table = 'machine_selfmade';

    public function machines(){
        return $this->hasMany('App\Machine');
    }

    public function self_made()
    {
        return $this->belongsTo('App\Self_made');
    }
}
