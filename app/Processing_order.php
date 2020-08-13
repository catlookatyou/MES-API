<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Processing_order extends Model
{
    public function processing_execution(){
        return $this->hasMany('App\Processing_execution');
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
