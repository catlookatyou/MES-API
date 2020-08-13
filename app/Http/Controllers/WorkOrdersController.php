<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Work_order;

class WorkOrdersController extends Controller
{
    public function all_work_orders(Request $request){
        $work_orders = Work_order::where('company_id', Auth::user()->company_id)->get(); 
        for($i=0; $i<count($work_orders); $i++){
            $work_order_id = $work_orders[$i]->id;
            //order_product and product
            $order_product_id = $work_orders[$i]->order_product_id;
            $order_product = DB::table('order_product')
                        ->where('id', $order_product_id)
                        ->get();
            for($j=0; $j<count($order_product); $j++){
                $product_id = $order_product[$j]->product_id;
                $product = DB::table('products')
                                    ->where('id', $product_id)
                                    ->first();
                $order_product[$j]->product = $product;
            }
            $work_orders[$i]->order_product = $order_product;
            //purchase_lists
            $purchase_lists = DB::table('purchase_lists')
                        ->where('work_order_id', $work_order_id)
                        ->get();
            $work_orders[$i]->purchase_lists = $purchase_lists;
            //processing_orders
            $processing_orders = DB::table('processing_orders')
                        ->where('work_order_id', $work_order_id)
                        ->get();
            $work_orders[$i]->processing_orders = $processing_orders;
            //assembly_orders
            $assembly_orders = DB::table('assembly_orders')
                        ->where('work_order_id', $work_order_id)
                        ->get();
            $work_orders[$i]->assembly_orders = $assembly_orders;
        }
        
        $response = \Response::make( json_encode($work_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }

    public function one_work_order(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $work_orders = Work_order::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        $work_order_id = $work_orders[0]->id;
        //order_product and products
        $order_product_id = $work_orders[0]->order_product_id;
        $order_product = DB::table('order_product')
                    ->where('id', $order_product_id)
                    ->get();
        for($j=0; $j<count($order_product); $j++){
            $product_id = $order_product[$j]->product_id;
            $product = DB::table('products')
                                ->where('id', $product_id)
                                ->first();
            $order_product[$j]->product = $product;
        }
        $work_orders[0]->order_product = $order_product;
        //purchase_lists
        $purchase_lists = DB::table('purchase_lists')
                    ->where('work_order_id', $work_order_id)
                    ->get();
        $work_orders[0]->purchase_lists = $purchase_lists;
        //processing_orders
        $processing_orders = DB::table('processing_orders')
                    ->where('work_order_id', $work_order_id)
                    ->get();
        $work_orders[0]->processing_orders = $processing_orders;
        //assembly_orders
        $assembly_orders = DB::table('assembly_orders')
                    ->where('work_order_id', $work_order_id)
                    ->get();
        $work_orders[0]->assembly_orders = $assembly_orders;

        $response = \Response::make( json_encode($work_orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
