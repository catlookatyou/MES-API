<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tool_selfmade extends Model
{
    protected $table = 'tool_selfmade';

    public function tools(){
        return $this->hasMany('App\Tool');
    }

    public function self_made()
    {
        return $this->belongsTo('App\Self_made');
    }
}
