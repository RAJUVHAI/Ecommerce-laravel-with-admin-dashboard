<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function addcatagory(){

        $data['category'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)                          
                            ->get();
                                  
        return view ('Admin/addcatagory',$data);
    }


  
    public function postCatagory(Request $request){
        $validated = $request->validate([
            'c_name'   => 'required|max:255',
            'category' => 'required|numeric',
            'image'    => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status'   => 'required|numeric',
            // 'c_description' => 'required|max:500',
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
            'c_name'   => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'image'    => $image_name,
            'status'   => $request ->input('status'),
            // 'c_description' => $request ->input('c_description'),
        );

        $insert = DB::table('category_tb') ->insert($data);

        if($insert){
            return redirect('addcatagory')->with('status','Successfully added');
        }else{
            return redirect('addcatagory')->with('status','Something wrong');
        }



    }

    
    public function parentCatagory(){

        $data['parentcategory'] = DB::table('category_tb')
        ->select('category_tb.*')
        ->where('category','=',0)                          
        ->get();

        return view('Admin/parentcatagory', $data );
    }

    public function editParent($id=null){
        $data['editparent'] = DB::table('category_tb')
                            ->select('category_tb.*')
                            ->where('category','=',0)                          
                            ->first();
      
        return view('Admin/editparentcatagory',$data);
    }


    public function updateParent($id=null, Request $request){
        $validated = $request->validate([
            'c_name' => 'required|max:255',
            'category' => 'required|numeric',
            'image'    => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'status' => 'required|numeric',
            // 'c_description' => 'required|max:500',
        ]);


        if($request->file('image')){
            $image_name = time().$request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public/product-image',$image_name);
        }else{
            $image_name = $request->input('old_image');
        }

       

        $data = array(
            'c_name' => $request ->input('c_name'),
            'category' => $request ->input('category'),
            'image'    => $image_name,
            'status' => $request ->input('status'),
            // 'c_description' => $request ->input('c_description'),
        );

        $update = DB::table('category_tb') ->where('id',$id)->update($data);

        if($update){
            return redirect('editparent/'.$id)->with('status','Successfully added');
        }else{
            return redirect('editparent/'.$id)->with('error','Something wrong');
        }
    }



    public function childCatagory(){

        $data['childcategory'] = DB::table('category_tb')
                                ->select('category_tb.*')
                                ->where('category','!=',0)                          
                                ->get();

        return view('Admin/childcatagory', $data);
    }

    public function editChild($id=null){
        $data['childcategory'] = DB::table('category_tb')
                                ->select('category_tb.*')
                                ->where('category','!=',0)                          
                                ->first();
                          
        
        return view('Admin/editchildcatagory',$data);
    }

    public function updateChild($id=null, Request $request){
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

        $update = DB::table('category_tb') ->where('id',$id)->update($data);

        if($update){
            return redirect('editchild/'.$id)->with('status','Successfully added');
        }else{
            return redirect('editchild/'.$id)->with('error','Something wrong');
        }
    } 


 }
