@extends('layouts.admin')
@section('title', 'editproduct')
@section('content')

<div class="container-fluid">
    <div class="card p-2">
        <div class="card-header card-title">
            <h3>Add Product</h3>
        </div>
        <div class="p-2 card-body">
            <form class="d-flex justify-content-between" method="post" action="{{route('editproduct',['id'=>$product->id])}}" enctype="multipart/form-data">
                <input name="_method" type="hidden" value="PUT">
                @csrf

                <div class="product_l_hand col-lg-8">
                    <div class="form-group">
                        <label for="p_name">Product Name</label>
                        <input type="text" name="p_name" class="form-control form-control-md" value="{{$product->p_name}}" id="p_name" placeholder="Product Name" required>
                                        
                    </div>

                    <div class="form-group">
                        <label for="summernote" class="">Short description</label>
                        <div class="">
                            <div class="card card-outline">
                                <div class="card-body">
                                    <textarea name="short_description"  id="summernote"required>
                                        {{$product->short_description}}
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
                                    <textarea name="long_description" value="{{$product->long_description}}" id="summernote1" required>
                                        {{$product->long_description}}
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
                            <option value="{{$product->c_id}}">{{$product->c_name}}</option>
                            @foreach($category as $value)
                            <option value="{{$value->id}}">{{$value->c_name}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="form-group ">
                        <label for="file">Choose image</label>
                        <input name="image" type="file"   id="file" >
                        <input type="hidden" name="old_image" value="{{$product->image}}">
                        <img src="{{ asset('storage/product-image/'.$product->image) }}" widh="70" height="70">
                    </div>

                    <div class="form-group ">
                        <label for="Quantity">Quantity</label>
                        <input name="quantity" value="{{$product->quantity}}" type="number" class="form-control" id="Quantity"required>
                    </div>
                    <div class="form-group ">
                        <label for="Buying">Buying Price</label>
                        <input name="b_price" value="{{$product->b_price}}" type="number" class="form-control" id="Buying"required>
                    </div>
                    <div class="form-group ">
                        <label for="mrp">MRP Price</label>
                        <input name="mrp_price" value="{{$product->mrp_price}}" type="number" class="form-control" id="mrp"required>
                    </div>
                    <div class="form-group ">
                        <label for="selling">Selling Price</label>
                        <input name="s_price" value="{{$product->s_price}}" type="number" class="form-control" id="selling"required>
                    </div>

                    <button type="submit" class="btn btn-primary">Publish</button>
                </div>



            </form>
        </div>
    </div>



</div>



@endsection
