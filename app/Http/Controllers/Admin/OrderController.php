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
   public function prductform(){
       return view('Admin/addproduct');
   }
   public function manageproduct(){
       return view('Admin/manageproduct');
   }
   public function addcatagory(){
       return view ('Admin/addcatagory');
   }
   public function managecatagory(){
       return view('Admin/managecatagory');
   }
   public function ordertable(){
    return view('Admin/ordertable');
    }
    public function updateorder(){
        return view('Admin/updateorder');

    }
}