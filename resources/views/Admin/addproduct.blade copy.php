@extends('layouts.admin')
@section('title', 'add product')
@section('content')

<div class="container-fluid">
    <div class="ml-4">
        <h2>Add New Product</h2>
        
    </div>
        <div class="mt-5">
            <form class="d-flex justify-content-around">
                <div class="product_l_hand col-lg-8">
                    <div class="form-group">
                        <label for="p_name">Product Name</label>
                        <input type="text" class="form-control form-control-md" id="p_name" placeholder="Product Name">

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

                    <div class="row">
                        <table class="table ">
                            <thead>
                                <tr class="">
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Buying Price</th>
                                    <th scope="col">MRP Price</th>
                                    <th scope="col">Selling Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                    <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                    <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                    <td><input class="col-lg-10" type="number" placeholder="Selling Price"></td>
                                </tr>
                            </tbody>
                        </table>
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
                    <div class="form-group">
                        <label for="p_image">Image</label>
                        <input type="file" class="form-control-file" id="p_image">

                    </div>

                    <div class="form-group ">
                        <label for="">Status</label>
                        <select class="form-control">
                            <option>Pending</option>
                            <option>Received</option>
                            <option>Delivered</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>


                
            </form>
        </div>

</div>



@endsection
