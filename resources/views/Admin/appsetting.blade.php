@extends('layouts.admin')
@section('title', 'addbanner')
@section('content')
<section class="content">
    <div class="container-fluid border">
     
       
            <div class="row shadow-lg p-5 ">
            
           
        <div class="heading py-2">
                <h3>Application setting</h3>
                <hr>
            </div>
    

                <div class="col-2">

                </div>
                <div class="col-10">
                <form method="post"  action="appsetting"  enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Offer Heading </label>
                        <div class="col-sm-10">
                        <input  type="text" class="form-control" id="inputText" name="offer_heading" value="{{$editappsetting->offer_heading}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label">Location </label>
                        <div class="col-sm-10">
                        <input  type="text" class="form-control" id="inputText" name="location" value="{{$editappsetting->location}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"> Email  Address </label>
                        <div class="col-sm-10">
                        <input  type="email"  class="form-control" id="inputText" name="email_name" value="{{$editappsetting->email_name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label"> Phone Number </label>
                        <div class="col-sm-10">
                        <input  type="phone"  class="form-control" id="inputText" name="phone" value="{{$editappsetting->phone}}"  required>
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Website Logo </label>
                        <div class="col-sm-10 mb-3">
                        <input  class="form-control"  type="file" id="formFile" name="image" required>
                           
                        <img class="mt-2" src="{{ asset('storage/product-image/'.$editappsetting->image) }}" width="50" height="50" alt="">
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Newsletter Heading</label>
                        <div class="col-sm-10 mb-3">
                        <textarea  class="form-control"   id="floatingTextarea2" style="height: 100px" name="newsletter_heading" required>
                  {{$editappsetting->newsletter_heading}}
                        </textarea>
                        </div>
                    </div>

                  

                   <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Footer Text </label>
                        <div class="col-sm-10 mb-3">
                        <textarea  class="form-control"  id="floatingTextarea2" style="height: 100px" name="footer" required>
                       {{$editappsetting->footer}}
                       </textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10 mb-3">
                        <button type="submit" class=" btn btn-primary">Submit</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection