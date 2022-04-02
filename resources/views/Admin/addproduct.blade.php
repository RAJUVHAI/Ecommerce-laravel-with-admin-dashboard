@extends('layouts.admin')
@section('title', 'addproduct')
@section('content')

<div class="container-fluid">
    <div class="card p-2">
        <div class="card-header card-title">
            <h3>Add Product</h3>
        </div>
        <div class="p-2 card-body">
            <form class="d-flex justify-content-between" action="addproduct" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="product_l_hand col-lg-8">
                    <div class="form-group">
                        <label for="p_name">Product Name</label>
                        <input type="text" name="p_name" class="form-control form-control-md" id="p_name" placeholder="Product Name" required>
                                        
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="">Short description</label>
                        <div class="">
                            <div class="card card-outline">
                                <div class="card-body">
                                    <textarea name="short_description" id="summernote"required>
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="">Long Description</label>
                        <div class="">
                            <div class="card card-outline">
                                <div class="card-body">
                                    <textarea name="long_description" id="summernote1" required>
                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product_r_hand col-lg-3">
                    <div class="form-group ">
                        <label for="exampleInputEmail1">Catagory</label>
                        <select name="p_category" class="form-control form-control-md" required>
                            @foreach($product as $value)
                            <option value="{{$value->id}}">{{$value->c_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group ">
                        <label for="file">Choose image</label>
                        <input name="image" type="file"  id="file" required>
                    </div>

                    <div class="form-group ">
                        <label for="Quantity">Quantity</label>
                        <input name="quantity" type="number" class="form-control" id="Quantity"required>
                    </div>
                    <div class="form-group ">
                        <label for="Buying">Buying Price</label>
                        <input name="b_price" type="number" class="form-control" id="Buying"required>
                    </div>
                    <div class="form-group ">
                        <label for="mrp">MRP Price</label>
                        <input name="mrp_price" type="number" class="form-control" id="mrp"required>
                    </div>
                    <div class="form-group ">
                        <label for="selling">Selling Price</label>
                        <input name="s_price" type="number" class="form-control" id="selling"required>
                    </div>

                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>

            </form>
        </div>
    </div>



</div>



@endsection
