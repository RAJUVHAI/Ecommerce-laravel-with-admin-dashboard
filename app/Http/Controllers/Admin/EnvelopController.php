<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnvelopController extends Controller
{
    public function subscriber(){
        return view('Admin/subscriber');
    }
    public function contactsms(){
        return view('Admin/contactsms');
    }
}
