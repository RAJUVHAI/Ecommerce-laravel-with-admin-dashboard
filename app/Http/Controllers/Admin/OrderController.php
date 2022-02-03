<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
   public function index(){
       return view('Admin/neworder');
   }
   public function manage(){
       return view('Admin/manageorder');
   }
  
   public function ordertable(){
    return view('Admin/ordertable');
    }
    public function updateorder(){
        return view('Admin/updateorder');

    }
}