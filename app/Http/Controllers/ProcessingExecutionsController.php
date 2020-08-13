<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Processing_execution;

class ProcessingExecutionsController extends Controller
{
    public function all_processing_executions(Request $request){
        $processing_executions = Processing_execution::where('company_id', Auth::user()->company_id)->get();
        for($j=0; $j<count($processing_executions); $j++){ 
            $selfmades = $processing_executions[$j]->self_mades()->get();
            $processing_executions[$j]->selfmades = $selfmades;
            $outsourcings = $processing_executions[$j]->outsourcings()->get();
            $processing_executions[$j]->outsourcings = $outsourcings;
        }
        $response = \Response::make( json_encode($processing_executions), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function one_processing_execution(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $processing_executions = Processing_execution::where('company_id', Auth::user()->company_id)
                                                        ->where($condition)
                                                        ->get();
       
        $selfmades = $processing_executions[0]->self_mades()->get();
        $processing_executions[0]->selfmades = $selfmades;
        $outsourcings = $processing_executions[0]->outsourcings()->get();
        $processing_executions[0]->outsourcings = $outsourcings;
        $response = \Response::make( json_encode($processing_executions), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }
}
