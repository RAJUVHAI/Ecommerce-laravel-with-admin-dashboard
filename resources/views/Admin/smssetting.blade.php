@extends('layouts.admin')
@section('title', 'sms setting')
@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h6>Sms setting</h6>
            </div>
        </div>
        <hr>
            <div class="row">
            <div class="col">
                <form>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Gateway </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Title  </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Host </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Username</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                   
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> User ID </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                   
                  
                    <div class="form-group row">
                    <label for="inputNumber" class="col-sm-2 col-form-label"> </label>
                        <div class="col-sm-10 mb-3">
                        <button class="btn btn-primary">Save</button>
                        </div>
                    
                    </div>
                   
                   
            </div>
            <div class="col">
                <form>

                   <div class="h3 pb-4  ">
                   Test Your SMS
                   </div>
                
                    <div class="form-group row">
                        <label for="inputText" class="col-sm-2 col-form-label"> Mobile No. </label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputText" placeholder="Application Title here">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputNumber" class="col-sm-2 col-form-label">Message </label>
                        <div class="col-sm-10 mb-3">
                        <textarea class="form-control" placeholder="2021 © Copyright bdtask Treading System" id="floatingTextarea2" style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputNumber" class="col-sm-2 col-form-label"> </label>
                        <div class="col-sm-10 mb-3">
                        <button class="btn btn-primary">Save</button>
                        </div>
                    
                    </div>
                    
            </div>
        </div>
    </div>
@endsection