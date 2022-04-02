<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
     public function blog(){
       
       $data['appsetting'] = DB::table('appsetting_tb')
                                   ->select('*')
                                   ->first();

       $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category')
                            ->orderby('product_tb.p_category','ASC')
                            ->get();
                            
         return view('website.blog' , $data);
     }
}
