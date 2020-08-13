<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Outsourcing;

class OutsourcingsController extends Controller
{
    public function all_outsourcings(Request $request){
        $outsourcings = Outsourcing::where('company_id', Auth::user()->company_id)->get();
        for($i=0; $i<count($outsourcings); $i++){
            //process_execution
            $process_execution_id = $outsourcings[$i]->process_execution_id;
            $process_execution = DB::table('processing_executions')
                                    ->where('id', $process_execution_id)
                                    ->first();
            $outsourcings[$i]->process_execution = $process_execution;
            //purchase_list
            $purchase_lists = $outsourcings[$i]->purchase_list_outsourcing()->get();
            $outsourcings[$i]->purchase_lists = $purchase_lists;
                for($j=0; $j<count($purchase_lists); $j++){
                    $purchase_list_id = $purchase_lists[$j]->purchase_lists_id;
                    $purchase_list = DB::table('purchase_lists')
                        ->where('id', '=', $purchase_lists_id )
                        ->get();
                    $outsourcings[$i]->purchase_lists[$j] = $purchase_list;
                }
        }
        
        $response = \Response::make( json_encode($outsourcings), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;             
    }

    public function one_outsourcing(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];

        $outsourcings = Outsourcing::where('company_id', Auth::user()->company_id)
                        ->where($condition)
                        ->get();
        
            //process_execution
            $process_execution_id = $outsourcings[0]->process_execution_id;
            $process_execution = DB::table('processing_executions')
                                    ->where('id', $process_execution_id)
                                    ->first();
            $outsourcings[0]->process_execution = $process_execution;
            //purchase_list
            $purchase_lists = $outsourcings[0]->purchase_list_outsourcing()->get();
            $outsourcings[0]->purchase_lists = $purchase_lists;
                for($j=0; $j<count($purchase_lists); $j++){
                    $purchase_list_id = $purchase_lists[$j]->purchase_lists_id;
                    $purchase_list = DB::table('purchase_lists')
                        ->where('id', '=', $purchase_lists_id )
                        ->get();
                    $outsourcings[0]->purchase_lists[$j] = $purchase_list;
                }
        
            $response = \Response::make( json_encode($outsourcings), 200 );
            $response->header('Content-Type', 'application/json');
            return $response;
    }
}
