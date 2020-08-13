<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;
use App\Tool;
use App\Machine;
use App\Jig;

class Type extends Model
{	
	public function tools()
	{
		return $this->hasMany(Tool::class);
    }

    public function machines()
	{
		return $this->hasMany(Maachine::class);
    }
    
    public function jigs()
	{
		return $this->hasMany(Jig::class);
    }

	public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
