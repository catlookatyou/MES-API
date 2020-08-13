<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;

class TypesController extends Controller
{
    public function type_with_condition(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $types = DB::table('types')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        
        $response = \Response::make( json_encode($types), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
