<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jig_selfmade extends Model
{
    protected $table = 'jig_selfmade';

    public function jigs(){
        return $this->hasMany('App\Jig');
    }

    public function self_made()
    {
        return $this->belongsTo('App\Self_made');
    }
}
