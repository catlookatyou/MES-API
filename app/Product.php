<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class Product extends Model
{	
	public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
