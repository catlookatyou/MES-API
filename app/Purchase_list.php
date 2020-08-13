<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase_list extends Model
{
    public function purchase_list_stuff(){
        return $this->hasMany('App\Purchase_list_stuff');
    }

    public function purchase_list_standard_part(){
        return $this->hasMany('App\Purchase_list_standard_part');
    }

    public function purchase_list_outsourcing(){
        return $this->belongsTo('App\Outsourcing_purchase_list');
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
