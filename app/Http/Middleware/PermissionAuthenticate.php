<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class PermissionAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $resource, $operation)
    {
        if(Auth::user()){
            $permissions = Auth::user()->permissions()->get();
            foreach($permissions as $permission){
                if($permission->resource == $resource && $permission->operation == $operation){
                    return $next($request);
                }
            }
            return response('您沒有權限操作此項目.', 401);
        }else{
            return response('您沒有權限操作此項目.', 401);
        }  
    }
}
