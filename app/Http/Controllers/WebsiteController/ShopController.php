<?php

namespace App\Http\Controllers\WebsiteController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function shop(){
        $data['appsetting'] = DB::table('appsetting_tb')
                            ->select('*')
                            ->first();
        $data['product'] = DB::table('product_tb')
                            ->select('product_tb.*','category_tb.c_name')
                            ->join('category_tb','category_tb.id','=','product_tb.p_category')
                            ->orderby('product_tb.p_category','ASC')
                            ->get();

        return view('website.shop' ,$data);
    }
}
