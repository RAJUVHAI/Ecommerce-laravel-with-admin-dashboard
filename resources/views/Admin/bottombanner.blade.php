@extends('layouts.admin')
@section('title', 'bottom banner')
@section('content')
<section class="content bg-light shadow-lg mx-5 py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h6> Add bottom banner image </h6>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col px-5">
            <form  action="addnewbtmimg" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                        <label for="exampleInputText1">First Banner name</label>
                        <input type="text" class="form-control" id="exampleInputText1" name="baner_name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputFile1">First Banner</label>
                        <input type="file" class="form-control" id="exampleInputFile1" name="imageone" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputText">second Banner name</label>
                        <input type="text" class="form-control" id="exampleInputtext2" name="banner_name" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Second Banner</label>
                        <input type="file" class="form-control" id="exampleInputFile2" name="imagetwo" required>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
            </div>
        </div>   
    </div>
</section>   


@endsection
