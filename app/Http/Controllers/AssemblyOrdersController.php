<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Assembly_order;

class AssemblyOrdersController extends Controller
{
    public function all_assembly_orders(Request $request){
        $assembly_orders = Assembly_order::where('company_id', Auth::user()->company_id)->get();
        
        $response = \Response::make( json_encode($assembly_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function one_assembly_order(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $assembly_orders = Assembly_order::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        
        $response = \Response::make( json_encode($assembly_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }
}
