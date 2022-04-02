@extends('layouts.admin')
@section('title', 'privercy')
@section('content')

<section class="content bg-light shadow-sm mx-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h6> Privercy setting </h6>
            </div>
        </div>
        <hr>
            <div class="row">
           
            <div class="col px-5">
                <form action="privercy" method="POST" enctype="multipart/form-data">    
                 @csrf
                   <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Privercy Heading </label>
                        <div class="col-sm-10">
                          <input type="text" name="privercy_heading" class="form-control" id="inputText" placeholder="Application Title here" required>
                        </div>
                    </div>
                   
                    <div class="form-group d-flex">
                    <label for="summernote" class="col-sm-2 col-form-label">Description</label>
                    <div class="card col-sm-10 card-outline">
                        <div class="card-body">
                            <textarea name="privercy_desc" id="summernote" required>
                              
                           </textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                       <label for="inputNumber" class="col-sm-2 col-form-label"> </label>
                        <div class="col-sm-10 mb-3">
                        <button class="btn btn-primary">Save</button>
                        </div>
                    
                    </div>
                 <form>
            </div>

           
        </div>
    </div>

@endsection