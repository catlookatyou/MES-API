<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;

class PageInfosController extends Controller
{
    public function all_page_info(Request $request){
        $page_infos = DB::table('page_infos')
                        //->where('id', $request->id)
                        ->get();
        
        $response = \Response::make( json_encode($page_infos), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_page_info(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $page_info = DB::table('page_infos')
                //->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        
        $response = \Response::make( json_encode($page_info), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
