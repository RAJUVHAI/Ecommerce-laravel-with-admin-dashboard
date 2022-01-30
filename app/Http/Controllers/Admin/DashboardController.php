<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
class DashboardController extends Controller
{
    public function index(){
       $check = Session::get('admin');

       if (!$check){
           return redirect('admin');
       }
       return view('Admin/dashboard');
       
    }
    public function logout(){
        Session::flush('admin');
        return redirect ('admin');
    }
}
