<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class CheckoutController extends Controller
{
    public function checkout(){
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();
       $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                            ->get();

return view('website.checkout' , $data);

        
    }


       
        

      
}
