<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Standard_part;

class StandardPartsController extends Controller
{
    public function all_standard_parts(Request $request){
        $standard_parts = Standard_part::where('company_id', Auth::user()->company_id)->get();
        
        $response = \Response::make( json_encode($standard_parts), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_standard_part(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $standard_parts = DB::table('standard_parts')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        
        $response = \Response::make( json_encode($standard_parts), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }
}
