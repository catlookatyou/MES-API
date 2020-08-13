<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Self_made;


class SelfMadesController extends Controller
{
    public function all_self_mades(Request $request){
        $self_mades = Self_made::where('company_id', Auth::user()->company_id)->get();
        for($i=0; $i<count($self_mades); $i++){
            //stuffs
            $stuffs = $self_mades[$i]->stuff_selfmade()->get();
            $self_mades[$i]->stuffs = $stuffs;
                for($j=0; $j<count($stuffs); $j++){
                    $stuff_id = $stuffs[$j]->stuff_id;
                    $stuff = DB::table('stuffs')
                        ->where('id', '=', $stuff_id )
                        ->get();
                    $self_mades[$i]->stuffs[$j] = $stuff;
                }
            //tools
            $tools = $self_mades[$i]->tool_selfmade()->get();
            $self_mades[$i]->tools = $tools;
                for($j=0; $j<count($tools); $j++){
                    $tool_id = $tools[$j]->tool_id;
                    $tool = DB::table('tools')
                        ->where('id', '=', $tool_id )
                        ->get();
                    $self_mades[$i]->tools[$j] = $tool;
                }
            //jigs
            $jigs = $self_mades[$i]->jig_selfmade()->get();
            $self_mades[$i]->jigs = $jigs;
                for($j=0; $j<count($jigs); $j++){
                    $jig_id = $jigs[$j]->jig_id;
                    $jig = DB::table('jigs')
                        ->where('id', '=', $jig_id )
                        ->get();
                    $self_mades[$i]->jigs[$j] = $jig;
                }
            //machines
            $machines = $self_mades[$i]->machine_selfmade()->get();
            $self_mades[$i]->machines = $machines;
                for($j=0; $j<count($machines); $j++){
                    $machine_id = $machines[$j]->machine_id;
                    $machine = DB::table('machines')
                        ->where('id', '=', $machine_id )
                        ->get();
                    $self_mades[$i]->machines[$j] = $machine;
                }
        }
        
        $response = \Response::make( json_encode($self_mades), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;    
    }

    public function one_self_made(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $self_mades = Self_made::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        //stuffs
        $stuffs = $self_mades[0]->stuff_selfmade()->get();
        $self_mades[0]->stuffs = $stuffs;
            for($j=0; $j<count($stuffs); $j++){
                $stuff_id = $stuffs[$j]->stuff_id;
                $stuff = DB::table('stuffs')
                    ->where('id', '=', $stuff_id )
                    ->get();
                $self_mades[0]->stuffs[$j] = $stuff;
            }
        //tools
        $tools = $self_mades[0]->tool_selfmade()->get();
        $self_mades[0]->tools = $tools;
            for($j=0; $j<count($tools); $j++){
                $tool_id = $tools[$j]->tool_id;
                $tool = DB::table('tools')
                    ->where('id', '=', $tool_id )
                    ->get();
                $self_mades[0]->tools[$j] = $tool;
            }
        //jigs
        $jigs = $self_mades[0]->jig_selfmade()->get();
        $self_mades[0]->jigs = $jigs;
            for($j=0; $j<count($jigs); $j++){
                $jig_id = $jigs[$j]->jig_id;
                $jig = DB::table('jigs')
                    ->where('id', '=', $jig_id )
                    ->get();
                $self_mades[0]->jigs[$j] = $jig;
            }
        //machines
        $machines = $self_mades[0]->machine_selfmade()->get();
        $self_mades[0]->machines = $machines;
            for($j=0; $j<count($machines); $j++){
                $machine_id = $machines[$j]->machine_id;
                $machine = DB::table('machines')
                    ->where('id', '=', $machine_id )
                    ->get();
                $self_mades[0]->machines[$j] = $machine;
            }  
        
        $response = \Response::make( json_encode($self_mades), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }
}
