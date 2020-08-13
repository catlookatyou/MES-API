<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_list_standard_part extends Model
{
    protected $table = 'purchase_list_standard_part';

    public function purchase_list()
    {
        return $this->belongsTo('App\Purchase_list');
    }
}
