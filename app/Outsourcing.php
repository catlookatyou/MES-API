<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outsourcing extends Model
{
    public function purchase_list_outsourcing(){
        return $this->hasMany('App\Outsourcing_purchase_list');
	}
	
	public function processing_execution(){
        return $this->belongsTo('App\Processing_execution');
    }
   
    public function getPhotoUrl(){ 
	    if(!empty($this->photo)){
		    if(!preg_match("/^[a-zA-z]+:\/\//", $this->photo)){
			    return URL::asset($this->photo);
		    }else{
			    return $this->photo;
		    }
	    }
    }
}
