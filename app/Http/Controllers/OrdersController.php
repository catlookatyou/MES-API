<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Order;
use App\Processing_order;

class OrdersController extends Controller
{
    public function all_order_product(Request $request){
        $orders = DB::table('orders')
                        ->where('company_id', Auth::user()->company_id)
                        ->get();
        $arr=array();
        foreach($orders as $order){
            $arr[] = $order->id;
        }
        $order_product = DB::table('order_product')
                        ->whereIn('order_id', $arr)
                        ->get();

        $response = \Response::make( json_encode($order_product), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;
    }

    public function all_orders_with_info(Request $request){
        $orders = Order::where('company_id', Auth::user()->company_id)->get(); 
        for($i=0; $i<count($orders); $i++){
            $order_id = $orders[$i]->id;
            //work_orders
            $work_orders = DB::table('work_orders')
                        ->where('order_id', $order_id)
                        ->get();
            //use_work_orders_find_info
            for($j=0; $j<count($work_orders); $j++){
                $work_order_id = $work_orders[$j]->id;
                //purchase_lists
                $purchase_lists = DB::table('purchase_lists')
                            ->where('work_order_id', $work_order_id)
                            ->get();
                $work_orders[$j]->purchase_lists = $purchase_lists;
                //processing_orders and selfmades and outsourcings
                $processing_orders = Processing_order::where('work_order_id', $work_order_id)->get(); 

                for($k=0; $k<count($processing_orders); $k++){ 
                    $executions = $processing_orders[$k]->processing_execution()->get();
                    for($l=0; $l<count($executions); $l++){ 
                        $selfmades = $executions[$l]->self_mades()->get();
                        $executions[$l]->selfmades = $selfmades;
                        $outsourcings = $executions[$l]->outsourcings()->get();
                        $executions[$l]->outsourcings = $outsourcings;
                    }
                    $processing_orders[$k]->processing_execution = $executions;
                }

                $work_orders[$j]->processing_orders = $processing_orders;
                //assembly_orders
                $assembly_orders = DB::table('assembly_orders')
                            ->where('work_order_id', $work_order_id)
                            ->get();
                $work_orders[$j]->assembly_orders = $assembly_orders;
            }
            $orders[$i]->work_orders = $work_orders;
        }

        $response = \Response::make( json_encode($orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_order_with_info(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $orders = Order::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();

        $order_id = $orders[0]->id;
        //work_orders
        $work_orders = DB::table('work_orders')
                            ->where('order_id', $order_id)
                            ->get();
        //use_work_orders_find_info
        for($j=0; $j<count($work_orders); $j++){
            $work_order_id = $work_orders[$j]->id;
            //purchase_lists
            $purchase_lists = DB::table('purchase_lists')
                                ->where('work_order_id', $work_order_id)
                                ->get();
            $work_orders[$j]->purchase_lists = $purchase_lists;
            //processing_orders and selfmades and outsourcings
            $processing_orders = Processing_order::where('work_order_id', $work_order_id)->get(); 

            for($k=0; $k<count($processing_orders); $k++){ 
                $executions = $processing_orders[$k]->processing_execution()->get();
                for($l=0; $l<count($executions); $l++){ 
                    $selfmades = $executions[$l]->self_mades()->get();
                    $executions[$l]->selfmades = $selfmades;
                    $outsourcings = $executions[$l]->outsourcings()->get();
                    $executions[$l]->outsourcings = $outsourcings;
                }
                $processing_orders[$k]->processing_execution = $executions;
            }

            $work_orders[$j]->processing_orders = $processing_orders;
            //assembly_orders
            $assembly_orders = DB::table('assembly_orders')
                            ->where('work_order_id', $work_order_id)
                            ->get();
            $work_orders[$j]->assembly_orders = $assembly_orders;
        }
        $orders[0]->work_orders = $work_orders;

        $response = \Response::make( json_encode($orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function all_orders(Request $request){
        $orders = Order::where('company_id', Auth::user()->company_id)->get(); 
        for($i=0; $i<count($orders); $i++){
            $order_id = $orders[$i]->id;
            //order_product and products
            $order_product = DB::table('order_product')
                        ->where('order_id', $order_id)
                        ->get();
            for($j=0; $j<count($order_product); $j++){
                $product_id = $order_product[$j]->product_id;
                $product = DB::table('products')
                                    ->where('id', $product_id)
                                    ->first();
                $order_product[$j]->product = $product;
            }
            $orders[$i]->order_product = $order_product;     
            //work_orders
            $work_orders = DB::table('work_orders')
                        ->where('order_id', $order_id)
                        ->get();
            $orders[$i]->work_orders = $work_orders;
        }
        
        $response = \Response::make( json_encode($orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_order(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $orders = Order::where('company_id', Auth::user()->company_id)
                                        ->where($condition)
                                        ->get();
        $order_id = $orders[0]->id;
        //order_product and products
        $order_product = DB::table('order_product')
        ->where('order_id', $order_id)
        ->get();
        for($j=0; $j<count($order_product); $j++){
            $product_id = $order_product[$j]->product_id;
            $product = DB::table('products')
                                ->where('id', $product_id)
                                ->first();
            $order_product[$j]->product = $product;
        }
        $orders[0]->order_product = $order_product; 
        //work_orders
        $work_orders = DB::table('work_orders')
                    ->where('order_id', $order_id)
                    ->get();
        $orders[0]->work_orders = $work_orders;

        $response = \Response::make( json_encode($orders), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
