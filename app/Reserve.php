<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stuff;

class Reserve extends Model
{
    protected $fillable = [
		'name', 'stuff_id', 'count', 'unit'
    ];
    
    public function stuff()
    {
        return $this->belongsTo(Stuff::class);
    }

    public function stuffname(){
        $stuff = Stuff::findOrFail($this->stuff_id);
        return $stuff->name;
    }
}
