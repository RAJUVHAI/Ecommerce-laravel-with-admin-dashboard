<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class DashboardController extends Controller
{
    public function index(){
       $check = Session::get('admin');

       if (!$check){
           return redirect('admin');
       }
       $data['latest_product'] = DB::table('product_tb')
                                
                                ->select('product_tb.*', 'category_tb.id', 'category_tb.c_name')
                                ->join('category_tb', 'category_tb.id', '=', 'product_tb.p_category')
                                ->orderBy('product_tb.p_category','ASC')
                                ->get();



       return view('Admin/dashboard',$data);
       
    }
    public function logout(){
        Session::flush('admin');
        return redirect ('admin');
    }
}
