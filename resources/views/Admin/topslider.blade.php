@extends('layouts.admin')
@section('title', 'topslider')
@section('content')
<section class="content">
    <div class="container-fluid border">
        <div class="row shadow-lg p-5 ">
                
    

               
                     <div class="col col-lg-4 col-sm-12 bg-white shadow-lg py-5 px-5">
                         <div class="addtopslider">
                             <h3 class="text-center py-2">Add Top Slider </h3>
                            
                         </div>
                     <form action="topslider" method="post" enctype="multipart/form-data">
                         @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Top slider catagory</label>
                                <input type="text" class="form-control" id="exampleInputtext1"  name="slider_catagoryname" required>
                               
                            </div>
                            <div class="form-group">
                                <label for="exampleInputimage">image</label>
                                <input type="file" class="form-control" id="exampleInputimage1" name="image">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit</button>
                     </form>
                      </div>

                      <div class="col col-lg-8 col-sm-12 table-border border-light bg_table shadow-sm px-2 ">
                                <!-- /.card -->
                                <div class="card">
                                    <div class="card-header card-title">
                                        <h3>top slider  List</h3>
                                    </div>
                                    <div class="card-body">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-info">ID</th>
                                                    <th class="text-info">catagory Name</th>
                                                    <th class="text-info">Image</th>
                                                    <th class="text-info">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($topsliderdata as $values)
                                                
                                            
                                                <tr>
                                                    <td>{{$values->id}}</td>
                                                    <td>{{$values->slider_catagoryname}}</td>
                                                    <td><img src="{{ asset('storage/product-image/'.$values->image) }}" widh="50" height="50"> </td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary"><i class="far fa-edit "></i></a>
                                                    </td>
                                                </tr>
                                            
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                             </div>
                            <!-- /.col -->

                    
        
           
    
                    
              
       </div>
    </div>
 </section>     
     
@endsection