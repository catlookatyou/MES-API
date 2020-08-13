<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;

class UserPermissionsController extends Controller
{
    public function all_user_permissions(Request $request){
        $user_permission = DB::table('user_permission')
                        //->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($user_permission), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }

    public function one_user_permission(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];

        $user_permission = DB::table('user_permission')
                        //->select($request->displayField)
                        ->where($condition)
                        //->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($user_permission), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }

    public function display_user_permission(Request $request){
        $user_permission = DB::table('user_permission')
                        ->select($request->displayField)
                        //->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($user_permission), 200 );
        $response->header('Content-Type', 'application/json');
        return $response; 
    }
}
