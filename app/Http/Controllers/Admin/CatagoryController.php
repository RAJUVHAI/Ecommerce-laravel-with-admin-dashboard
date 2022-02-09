<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function addcatagory(){
        $data['category'] = DB::table('category_tb')
                            ->select('c_name','id','status')
                            ->where('category',0)
                            ->where('status',1)
                            ->get();


                        // echo '<pre>';
                        // print_r($data);
                        // die();
                            
        return view ('Admin/addcatagory',$data);
    }
  
    public function postCatagory(Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'status' => 'required|numeric',
            // 'c_description' => 'required|max:500',
        ]);

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'status' => $request ->input('status'),
            // 'c_description' => $request ->input('c_description'),
        );

        $insert = DB::table('category_tb') ->insert($data);

        if($insert){
            return redirect('addcatagory')->with('status','Successfully added');
        }else{
            return redirect('addcatagory')->with('status','Something wrong');
        }



    }

}
