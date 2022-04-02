@extends('layouts.admin')
@section('title', 'parentcatagory')
@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-header card-title">
            <h3>Parent Catagory List</h3>
        </div>


        <!-- /.card-header -->
        <div class="card-body">
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
                       @foreach ($parentcategory as $values)
                    <tr>
                        <td>{{$values->id}}</td>
                        <td>{{$values->c_name}}</td>
                        <td><img src="{{ asset('storage/product-image/'.$values->image) }}" widh="50" height="50"></td>                             
                        <td>{{$values->status}}</td>
                        <td> <button class="btn btn-success shadow" type="submit"><i class="far fa-check-circle"></i></button>

                           <a href="{{route('editparent',['id'=>$values->id])}}"><button type="button" class="btn btn-primary shadow" type="submit" data-toggle="modal"
                                data-target="#exampleModal">
                                <i class="fas fa-pen-alt"></i>
                            </button></a>
                            <button class="btn btn-danger shadow" type="submit"><i class="fas fa-trash-alt"></i>
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



@endsection