<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Setting extends Controller
{
     public function  appsetting(){
      
        $data['editappsetting'] = DB::table('appsetting_tb')
                                ->select('*')
                                ->first();       


         return view('Admin/appsetting' ,$data);
     }

     // app setting start

    public function appnewappsetting(Request $request){
        $validated = $request->validate([
            'offer_heading'      => 'required|max:255',
            'location'           => 'required|max:255',
            'email_name'         => 'required|max:255',
            'phone'              => 'required|max:255',
            'image'              => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'newsletter_heading' => 'required|max:255',
            'footer'             => 'required|max:255',
           
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
            'offer_heading'                   => $request->input('offer_heading'),
            'location'                        => $request->input('location'),
            'email_name'                      => $request->input('email_name'),
            'phone'                           => $request->input('phone'),
            'image'                           => $image_name,
            'newsletter_heading'              => $request->input('newsletter_heading'),
            'footer'                          => $request->input('footer'),
           
        );

       $update = DB::table('appsetting_tb')->update($data);
       
       if($update){
            return redirect('appsetting')->with('status', 'Successfully update');
       }else{
            return redirect('appsetting')->with('error', 'Something Went Wrong');
       }

    }




    


    // app setting end


     public function  smssetting(){
        return view('Admin/smssetting');
    }
    public function  emailsetting(){
        return view('Admin/emailsetting');
    }
}
