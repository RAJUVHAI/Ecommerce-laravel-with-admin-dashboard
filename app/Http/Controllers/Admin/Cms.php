<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class Cms extends Controller
{
    public function  banner(){
        $data['editbanner'] = DB::table('banner_tb')
                         ->select('*')
                         ->first();

       
        return view('Admin/banner', $data);
    }

// add banner  start

    public function addnewbanner(Request $request){
        $validated = $request->validate([
            'banner_name'       => 'required|max:255',
            'desc_name'         => 'required|max:500',
            'image'             => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);
        
        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }

        $image_name = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/product-image',$image_name);
        
        $data = array(
            'banner_name'            => $request->input('banner_name'),
            'desc_name'              => $request->input('desc_name'),
            'image'                  => $image_name,
           
        );
       $update = DB::table('banner_tb')->update($data);
       if($update){
            return redirect('banner')->with('status', 'Successfully update');
       }else{
            return redirect('banner')->with('error', 'Something Went Wrong');
       }

    }
    
    // add banner end

    // add top slider 
    public function  topslider(){
        $data['topsliderdata'] = DB::table('topslider_tb')
                         ->select('*')
                         ->get();

       
        return view('Admin/topslider', $data);
    }


    public function addnewtopslider(Request $request){
        $validated = $request->validate([
            'slider_catagoryname'       => 'required|max:255',
            'image'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);
    

        $image_name = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/product-image',$image_name);
        
        $data = array(
            'slider_catagoryname'    => $request->input('slider_catagoryname'),
            'image'                  => $image_name,
           
        );
       $insert = DB::table('topslider_tb')->insert($data);
       if($insert){
            return redirect('topslider')->with('status', 'Successfully added');
       }else{
            return redirect('topslider')->with('error', 'Something Went wrong');
       }

        return view('Admin/topslider' , $data);
    }

        // end top slider




   //bottom banner start
    public function bottombanner(){
        return view('Admin.bottombanner');

    }

    public function addnewbtmimg(Request $request){
        $validated = $request->validate([
            'baner_name'           => 'required|max:255',
            'banner_name'           => 'required|max:255',
            'imageone'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'imagetwo'             => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
           
        ]);
    

        if($request->file('image')){
            $image_nameone = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_nameone);
        }else{
            $image_nameone = $request->input('old_image');
        }

        if($request->file('image')){
            $image_nametwo = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_nametwo);
        }else{
            $image_nametwo = $request->input('old_image');
        }



        $image_nameone = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/product-image',$image_nameone);
        
        $image_nametwo = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/product-image',$image_nametwo);
        
        $data = array(
            'baner_name'    => $request->input('baner_name'),
            'banner_name'    => $request->input('banner_name'),
            'imageone'                  => $image_nameone,
            'imagetwo'                  => $image_nametwo,
           
        );
       $update = DB::table('bottombanner_tb')->update($data);
       if($update){
            return redirect('bottombanner')->with('status', 'Successfully updated');
       }else{
            return redirect('bottombanner')->with('error', 'Something Went wrong');
       }


       return view('Admin/bottombanner' , $data);

       
    }


    
//bottom banner end

    public function  deliveryinfo(){
        return view('Admin/deliveryinfo');
    }
    
    public function editdeliveryinfo(){
        
        return view('Admin/editdeliveryinfo');
    }

    public function shopdetails(){
        return view('Admin/shopdetails');
    }

    // privercy setting start


    public function  privercy(){

        
        return view('Admin/privercy');
    }
    public function addnewprivercy(Request $request){
        $validated = $request->validate([
            'privercy_heading'       => 'required|max:255',
            'privercy_desc'         => 'required|max:500',
            
            
        ]);
        
    
        
        $data = array(
            'privercy_heading'            => $request->input('privercy_heading'),
            'privercy_desc'              => $request->input('privercy_desc'),
       
           
        );
       $update = DB::table('privercy_tb')->update($data);
       if($update){
            return redirect('privercy')->with('status', 'Successfully update');
       }else{
            return redirect('privercy')->with('error', 'Something Went Wrong');
       }

    }

    // privercy setting end



   
    
    
}
