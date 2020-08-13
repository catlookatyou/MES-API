<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_list_stuff extends Model
{
    protected $table = 'purchase_list_stuff';

    public function purchase_list()
    {
        return $this->belongsTo('App\Purchase_list');
    }
}
