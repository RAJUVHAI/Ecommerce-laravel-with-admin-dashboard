@extends('layouts.admin')
@section('title', 'addcatagory')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3> Catagories </h3>
        </div>
        <div class="card-body d-flex justify-content-between ">
            <div class="col-lg-3">
                <form action="addcatagory" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input name="c_name" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                            placeholder="Catagory Name" required>
                    </div>

                    <div class="form-group ">
                        <label for="parentcatagory">Catagory Type</label>
                        <select name="category" id="parentcatagory" class="form-control form-control-md" required>
                            <option value="0">Parent Category</option>
                            @foreach ($category as $values)
                            <option value="{{$values->id}}">{{$values->c_name}}</option>
                            @endforeach
                        </select>  
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input name="image" type="file" class="form-control form-control-md" id="exampleInputEmail1" >
                    </div>
                    <div class="form-group ">
                        <label for="catagoryStatus">Status</label>
                        <div class="d-flex align-items-center">
                            <div class="form-check mr-2">
                                <input class="form-check-input" type="radio" value="1" name="status" checked="">
                                <label class="form-check-label">Active</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="0" name="status">
                                <label class="form-check-label">In Active</label>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="c_description" class="d-block form-control" name="description" id="" cols="38" rows="3" required></textarea>
                    </div> -->

                    <button type="submit" class="btn btn-primary">Add New Catagory</button>
                </form>
            </div>

            <div class="card col-lg-8 ">
                <div class="card-header card-title">
                    <h3>Catagory List</h3>
                </div>
                <!-- /.card-header -->
                <div class="">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">Caragory Name</th>
                                <th class="text-info">Image</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                              @foreach ($category as $values)
                                  
                            
                            <tr>
                                <td>{{$values->id}}</td>
                                <td>{{$values->c_name}}</td>  
                                <td><img src="{{ asset('storage/product-image/'.$values->image) }}" widh="50" height="50"></td>                             
                                <td>{{$values->status}}</td>
                                <td> 
                                <button class="btn btn-success" type="submit"><i
                                        class="far fa-check-circle"></i>
                                </button>
                                <a href="#" class="btn btn-primary" type="submit"><i class="fas fa-pen-alt"></i></a>
                                
                                <button class="btn btn-danger" type="submit"><i class="fas fa-trash-alt"></i>
                                </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card-body -->
        </div>
    </div>




</div>




@endsection
