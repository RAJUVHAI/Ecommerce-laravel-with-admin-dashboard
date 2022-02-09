@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')

<div class="container-fluid">
    <div class="col-lg-12 table-border border-light bg_table shadow-sm p-3 ">
        <!-- /.card -->
        <div class="card">
            <div class="card-header card-title">
                <h3>Product List</h3>
            </div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-info">ID</th>
                            <th class="text-info">Image</th>
                            <th class="text-info">product Name</th>
                            <th class="text-info">Catagory</th>
                            <th class="text-info">Qty.</th>
                            <th class="text-info">Buying Price(s)</th>
                            <th class="text-info">MRP Price</th>
                            <th class="text-info">Selling Price</th>
                            <th class="text-info">Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($product as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td><img src="{{ asset('storage/product-image/'.$value->image) }}" widh="50" height="50"></td>
                            <td>{{$value->p_name}}</td>
                            <td>{{$value->c_name}}</td>
                            <td>{{$value->quantity}}</td>
                            <td>{{$value->b_price}} </td>
                            <td>{{$value->mrp_price}}</td>
                            <td>{{$value->s_price}}</td>
                            <td>
                                <a href="{{route('editproduct',['id'=>$value->id])}}" class="btn btn-primary"><i class="far fa-edit "></i></a>


                               
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
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Your Product List
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="">    

                    <div class="form-group">
                        <label for="p_image">Image</label>
                        <input type="file" class="form-control-file" id="p_image">

                    </div>
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Parent Catagory</label>
                        <select class="form-control form-control-md">
                            <option>Fashion</option>
                            <option>Gadget</option>
                            <option>T-shirt</option>
                            <option>E-electronic</option>
                            <option>Desktop </option>
                            <option>Ac</option>
                            <option>Laptop</option>
                        </select>

                    </div>
                    <div class="short-box-wrapper">
                        <div class="short-box">
                            <div class="form-group">
                                <table class="table ">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">Qty.</th>
                                            <th scope="col">Buying Price</th>
                                            <th scope="col">MRP Price</th>
                                            <th scope="col">Selling Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="">
                                            <td><input class="col-lg-10 form-control" type="number" placeholder="0.00"></td>
                                            <td><input class="col-lg-10 form-control" type="number" placeholder="0.00"></td>
                                            <td><input class="col-lg-10 form-control" type="number" placeholder="0.00"></td>
                                            <td><input class="col-lg-10 form-control" type="number" placeholder="Selling Price"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>




@endsection
