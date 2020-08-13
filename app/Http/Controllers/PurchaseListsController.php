<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Purchase_list;

class PurchaseListsController extends Controller
{
    public function all_purchase_lists(Request $request){
        $purchase_lists = Purchase_list::where('company_id', Auth::user()->company_id)->get();
        for($i=0; $i<count($purchase_lists); $i++){
            //stuffs
            $stuffs = $purchase_lists[$i]->purchase_list_stuff()->get();
            $purchase_lists[$i]->stuffs = $stuffs;
                for($j=0; $j<count($stuffs); $j++){
                    $stuff_id = $stuffs[$j]->stuff_id;
                    $stuff = DB::table('stuffs')
                        ->where('id', '=', $stuff_id )
                        ->get();
                    $purchase_lists[$i]->stuffs[$j] = $stuff;
                }
            //standard_part
            $standard_parts = $purchase_lists[$i]->purchase_list_standard_part()->get();
            $purchase_lists[$i]->standard_parts = $standard_parts;
                for($j=0; $j<count($standard_parts); $j++){
                    $standard_part_id = $standard_parts[$j]->standard_part_id;
                    $standard_part = DB::table('standard_parts')
                        ->where('id', '=', $standard_part_id )
                        ->get();
                    $purchase_lists[$i]->standard_parts[$j] = $standard_part;
                }
            //outsourcing
            $outsourcings = $purchase_lists[$i]->purchase_list_outsourcing()->get();
            $purchase_lists[$i]->outsourcings = $outsourcings;
                for($j=0; $j<count($outsourcings); $j++){
                    $outsourcing_id = $outsourcings[$j]->outsourcing_id;
                    $outsourcing = DB::table('outsourcings')
                        ->where('id', '=', $outsourcing_id )
                        ->get();
                    $purchase_lists[$i]->outsourcings[$j] = $outsourcing;
                }
        }
        
        $response = \Response::make( json_encode($purchase_lists), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;       
    }

    public function one_purchase_list(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $purchase_lists = Purchase_list::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        //stuffs
        $stuffs = $purchase_lists[0]->purchase_list_stuff()->get();
        $purchase_lists[0]->stuffs = $stuffs;
            for($j=0; $j<count($stuffs); $j++){
                $stuff_id = $stuffs[$j]->stuff_id;
                $stuff = DB::table('stuffs')
                    ->where('id', '=', $stuff_id )
                    ->get();
                $purchase_lists[0]->stuffs[$j] = $stuff;
            }
        //standard_part
        $standard_parts = $purchase_lists[0]->purchase_list_standard_part()->get();
        $purchase_lists[0]->standard_parts = $standard_parts;
            for($j=0; $j<count($standard_parts); $j++){
                $standard_part_id = $standard_parts[$j]->standard_part_id;
                $standard_part = DB::table('standard_parts')
                    ->where('id', '=', $standard_part_id )
                    ->get();
                $purchase_lists[0]->standard_parts[$j] = $standard_part;
            }
        //outsourcing
        $outsourcings = $purchase_lists[0]->purchase_list_outsourcing()->get();
            $purchase_lists[0]->outsourcings = $outsourcings;
                for($j=0; $j<count($outsourcings); $j++){
                    $outsourcing_id = $outsourcings[$j]->outsourcing_id;
                    $outsourcing = DB::table('outsourcings')
                        ->where('id', '=', $outsourcing_id )
                        ->get();
                    $purchase_lists[0]->outsourcings[$j] = $outsourcing;
                }
        
        $response = \Response::make( json_encode($purchase_lists), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;    
    }
}
