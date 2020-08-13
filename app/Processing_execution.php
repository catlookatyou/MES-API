<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processing_execution extends Model
{
    public function processing_order(){
        return $this->belongsTo('App\Processing_order');
    }

    public function self_mades(){
        return $this->hasMany('App\Self_made');
    }

    public function outsourcings(){
        return $this->hasMany('App\Outsourcing');
    }
}
