<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Reserve;
use App\Company;

class Stuff extends Model
{
	protected $fillable = [
		'name', 'unit_price', 'unit', 'company_id'
	];
	
	public function reserves()
	{
		return $this->hasMany(Reserve::class);
	}

	public function stuff_selfmade()
    {
        return $this->belongsTo('App\Stuff_selfmade');
	}
	
	public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
