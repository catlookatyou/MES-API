<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Machine;

class MachinesController extends Controller
{
    public function all_machines(Request $request){
        $machines = Machine::where('company_id', Auth::user()->company_id)->get();
            for($i=0; $i<count($machines); $i++){
                $type = $machines[$i]->type()->get();
                $machines[$i]->type = $type;
            }

        $response = \Response::make( json_encode($machines), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;     
    }

    public function one_machine(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $machine = DB::table('machines')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        $id = $machine[0]->type_id;
        $type = DB::table('types')
                ->where('id', '=', $id )
                ->get();
        $machine[0]->type = $type;

        $response = \Response::make( json_encode($machine), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }
}
