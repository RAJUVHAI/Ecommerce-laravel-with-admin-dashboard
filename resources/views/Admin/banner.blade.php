@extends('layouts.admin')
@section('title', 'banner')
@section('content')
<section class="content bg-light shadow-lg mx-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h6> Add banner </h6>
            </div>
        </div>
        <hr>
            <div class="row">
           
            <div class="col px-5">
                <form action="banner" method="POST" enctype="multipart/form-data">    
                 @csrf
                   <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Slider H1 English </label>
                        <div class="col-sm-10">
                        <input type="text" name="banner_name" value="{{$editbanner->banner_name}}" class="form-control" id="inputText" >
                        </div>
                    </div>
                   
                    <div class="form-group d-flex">
                    <label for="summernote" class="col-sm-2 col-form-label">Description</label>
                    <div class="card col-sm-10 card-outline">
                        <div class="card-body">
                            <textarea name="desc_name" id="summernote" required>
                              {{$editbanner->desc_name}}
                          </textarea>
                        </div>
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Image </label>
                        <div class="col-sm-10">
                        <input type="file" name="image"  class="form-control" id="inputText" placeholder="Application Title here" >
                       
                        <img class="my-2 " name="image" src="{{ asset('storage/product-image/'.$editbanner->image) }}" widh="70" height="70">
                  </div>
                    </div>
                    
                    <div class="form-group row">
                       <label for="inputNumber" class="col-sm-2 col-form-label"> </label>
                        <div class="col-sm-10 mb-3">
                        <button type="submit" class=" btn btn-primary">Save</button>
                        </div>
                    
                    </div>
                 <form>
            </div>

           
        </div>
    </div>


@endsection
