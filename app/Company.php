<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
	public function machines()
    {
        return $this->hasMany('App\Machine');
    }
	public function stuffs()
    {
        return $this->hasMany('App\Stuff');
    }
	public function users()
	{
		return $this->hasMany('App\User');		
	}
}
