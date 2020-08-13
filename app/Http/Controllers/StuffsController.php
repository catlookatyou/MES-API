<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Stuff;

class StuffsController extends Controller
{
    public function all_stuffs(Request $request){
        $stuffs = Stuff::where('company_id', Auth::user()->company_id)->get();
        
        $response = \Response::make( json_encode($stuffs), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_stuff(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $stuffs = DB::table('stuffs')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        
        $response = \Response::make( json_encode($stuffs), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
