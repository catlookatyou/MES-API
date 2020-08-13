<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Tool;

class ToolsController extends Controller
{
    public function all_tools(Request $request){
        $tools = Tool::where('company_id', Auth::user()->company_id)->get();
            for($i=0; $i<count($tools); $i++){
                $type = $tools[$i]->type()->get();
                $tools[$i]->type = $type;
            }
        
        $response = \Response::make( json_encode($tools), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
    public function one_tool(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $tool = DB::table('tools')
                ->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        $id = $tool[0]->type_id;
        $type = DB::table('types')
                ->where('id', '=', $id )
                ->get();
        $tool[0]->type = $type;
        
        $response = \Response::make( json_encode($tool), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
