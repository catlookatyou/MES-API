<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outsourcing_purchase_list extends Model
{
    protected $table = 'outsourcing_purchase_list';

    public function outsourcing()
    {
        return $this->belongsTo('App\Outsourcing');
    }

    public function purchase_list(){
        return $this->hasMany('App\Purchase_list');
    }
}
