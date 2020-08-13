<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Jig;

class JigsController extends Controller
{
    public function all_jigs(Request $request){
        $jigs = Jig::where('company_id', Auth::user()->company_id)->get();
            for($i=0; $i<count($jigs); $i++){
                $type = $jigs[$i]->type()->get();
                $jigs[$i]->type = $type;
            }
        
        $response = \Response::make( json_encode($jigs), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
        
    }

    public function one_jig(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $jig = DB::table('jigs')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        $id = $jig[0]->type_id;
        $type = DB::table('types')
                ->where('id', '=', $id )
                ->get();
        $jig[0]->type = $type;
        
        $response = \Response::make( json_encode($jig), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }
}
