<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function home(){

      $data['editbanner'] = DB::table('banner_tb')
                            ->select('*')
                            ->first();

      $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();

      $data['category'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)
                            ->where('status','!=',0)                          
                            ->get();
            

      $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                            ->get();




        return view('website/home' , $data );
    }

    public function index(){
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();
                            
        $data['category'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)  
                            ->where('status','!=',0)                              
                            ->get();

        $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                            ->get();

        
        return view('layouts/webadmin' ,$data); 
    }
    public function userlogin(){
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();
        $data['category'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)  
                            ->where('status','!=',0)                              
                            ->get();

        $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                            ->get();
        
        return view('auth/login' ,$data ); 
    }
    public function userregister(){
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();

        $data['category'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)
                            ->where('status','!=',0)                          
                            ->get();

        // $data['product'] = DB::table('product_tb')
        //                     ->select('product_tb.*','category_tb.c_name')
        //                     ->join('category_tb','category_tb.id','=','product_tb.p_category')
        //                     ->orderby('product_tb.p_category','ASC')
        //                     ->get();
        
        $data['product'] = DB::table('product_tb')
                                    ->select('product_tb.*','category_tb.c_name as c_name','category_tb.category as sub_id')
                                    ->join('category_tb','category_tb.id','=','product_tb.p_category') 
                                    ->get();

        return view('auth/register' , $data); 
    }


}
