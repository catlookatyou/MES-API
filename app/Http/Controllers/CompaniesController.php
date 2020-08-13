<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;

use Auth;
use App\Company;

class CompaniesController extends Controller
{
    public function all_companies(Request $request){
        $companies = Company::get();
        
        $response = \Response::make( json_encode($companies), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;   
    }

    public function one_company(Request $request){
        for($i=0;$i<count($request->conditionField);$i++){
            $condition[$request->conditionField[$i]]=$request->conditionValue[$i];
        }
        $condition_id = $request->conditionValue[0];
        $companies = DB::table('companies')
                //->where('company_id', Auth::user()->company_id)
                ->where($condition)
                ->get();
        
        $response = \Response::make( json_encode($companies), 200 );
        $response->header('Content-Type', 'application/json');
        return $response;  
    }
}
