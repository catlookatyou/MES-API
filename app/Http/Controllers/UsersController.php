<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;

class UsersController extends Controller
{
    public function all_users(Request $request){
        $users = DB::table('users')
                        ->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($users), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }

    public function one_user(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];

        $user = DB::table('users')
                        //->select($request->displayField)
                        ->where($condition)
                        ->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($user), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }

    public function display_users(Request $request){
        $select_users = DB::table('users')
                        ->select($request->displayField)
                        ->where('company_id', Auth::user()->company_id)
                        ->get();
        
        $response = \Response::make( json_encode($select_users), 200 );
        $response->header('Content-Type', 'application/json');
        return $response; 
    }
}
