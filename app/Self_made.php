<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Self_made extends Model
{
    public function processing_execution(){
        return $this->belongsTo('App\Processing_execution');
    }
    
    public function stuff_selfmade(){
        return $this->hasMany('App\Stuff_selfmade');
    }

    public function tool_selfmade(){
        return $this->hasMany('App\Tool_selfmade');
    }

    public function jig_selfmade(){
        return $this->hasMany('App\Jig_selfmade');
    }

    public function machine_selfmade(){
        return $this->hasMany('App\Machine_selfmade');
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
