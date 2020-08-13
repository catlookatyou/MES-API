<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Company;
use Auth;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];
	
	public function company()
    {
        return $this->belongsTo(Company::class);
    }
	
    public function permissions()
    {
        return $this->hasMany('App\User_permission');
    }

    public function check_permission($resource){
        if(Auth::user()){
            $permissions = Auth::user()->permissions()->get();
            foreach($permissions as $permission){
                if($permission->resource == $resource && $permission->operation == 'select'){
                    return True;
                }
            }
            return False;
        }else{
            return False;
        }  
    }

}
