<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Stuff;
use App\Reserve;

class ReservesController extends Controller
{
    public function all_reserves(Request $request){
        $reserves = Reserve::where('company_id', Auth::user()->company_id)->get();
            for($i=0; $i<count($reserves); $i++){
                $stuffs = $reserves[$i]->stuff()->get();
                $reserves[$i]->stuff = $stuffs;
            }
        
        $response = \Response::make( json_encode($reserves), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;    
    }

    public function one_reserve(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $reserve = DB::table('reserves')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        $id = $reserve[0]->stuff_id;
        $stuffs = DB::table('stuffs')
                ->where('id', '=', $id )
                ->get();
        $reserve[0]->stuff = $stuffs;
        
        $response = \Response::make( json_encode($reserve), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;    
    }
}
