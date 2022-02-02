@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')

<div class="container-fluid">
    <div class="card p-2">
        <div class="card-header card-title">
            <h3>Add Product</h3>
        </div>
        <div class="p-2 card-body">
            <form class="d-flex justify-content-between" action="POST" method="multipart/form-data" >
                <div class="product_l_hand col-lg-8">
                    <div class="form-group">
                        <label for="p_name">Product Name</label>
                        <input type="text" name="p_name" class="form-control form-control-md" id="p_name" placeholder="Product Name">
                       
                    
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="">Product Description</label>
                        <div class="">
                            <div class="card card-outline">
                                <div class="card-body">
                                    <textarea id="summernote">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="">Short Description</label>
                        <div class="">
                            <div class="card card-outline">
                                <div class="card-body">
                                    <textarea id="summernote1">
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_r_hand col-lg-3">
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
                   

                    <div class="form-group ">
                        <label for="Quantity">Quantity</label>
                        <input type="number" class="form-control" id="Quantity">
                    </div>
                    <div class="form-group ">
                        <label for="Buying">Buying Price</label>
                        <input type="number" class="form-control" id="Buying">
                    </div>
                    <div class="form-group ">
                        <label for="mrp">MRP Price</label>
                        <input type="number" class="form-control" id="mrp">
                    </div>
                    <div class="form-group ">
                        <label for="selling">Selling Price</label>
                        <input type="number" class="form-control" id="selling">
                    </div>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>



            </form>
        </div>
    </div>



</div>



@endsection
