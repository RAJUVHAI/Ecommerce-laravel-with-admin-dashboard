<?php

namespace App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Mail;
use Illuminate\Http\Request;
use Redirect;
use DB;

class ContactController extends Controller
{
    public function contact(){
         $data['appsetting'] = DB::table('appsetting_tb')
                                    ->select('*')
                                    ->first();

         $data['product'] = DB::table('product_tb')
                                    ->select('product_tb.*','category_tb.c_name')
                                    ->join('category_tb','category_tb.id','=','product_tb.p_category')
                                    ->orderby('product_tb.p_category','ASC')
                                    ->get();
      
        return view('website.contact' , $data);
    }

     // Store Contact Form data
     public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);
        //  Store data in database
        Contact::create($request->all());
        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('rajuvhai80828@gmail.com', 'Admin')->subject($request->get('subject'));
        });
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

   
}
