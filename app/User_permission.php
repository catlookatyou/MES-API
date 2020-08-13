<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_permission extends Model
{
    protected $table = 'user_permission';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
