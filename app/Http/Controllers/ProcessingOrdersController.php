<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Processing_order;

class ProcessingOrdersController extends Controller
{
    public function all_processing_orders(Request $request){
        $processing_orders = Processing_order::where('company_id', Auth::user()->company_id)->get(); 
        for($i=0; $i<count($processing_orders); $i++){ 
            $executions = $processing_orders[$i]->processing_execution()->get();
            for($j=0; $j<count($executions); $j++){ 
                $selfmades = $executions[$j]->self_mades()->get();
                $executions[$j]->selfmades = $selfmades;
                $outsourcings = $executions[$j]->outsourcings()->get();
                $executions[$j]->outsourcings = $outsourcings;
            }
            $processing_orders[$i]->processing_execution = $executions;
        }     
    
        $response = \Response::make( json_encode($processing_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function one_processing_order(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $processing_orders = Processing_order::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        $executions = $processing_orders[0]->processing_execution()->get();
        for($j=0; $j<count($executions); $j++){ 
            $selfmades = $executions[$j]->self_mades()->get();
            $executions[$j]->selfmades = $selfmades;
            $outsourcings = $executions[$j]->outsourcings()->get();
            $executions[$j]->outsourcings = $outsourcings;
        }
        $processing_orders[0]->processing_execution = $executions;

        $response = \Response::make( json_encode($processing_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }
}
