@extends('layouts.admin')
@section('title', 'editchildcategory')
@section('content')
<section class="content">
<div class="container-fluid">
    <div class="row">
        <div class="col">
        <form action="{{route('editchild',[$childcategory->id])}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input name="c_name" value="{{$childcategory->c_name}}" type="text" class="form-control form-control-md" id="exampleInputEmail1"
                        placeholder="Catagory Name" required>

                </div>
                <div class="form-group ">
                    <label for="subcatagory">Catagory type</label>
                    <select name="category" id="parentcatagory" class="form-control form-control-md" required>
                        <option value="{{$childcategory->category}}">Child Category</option>
                    </select>

                </div>
                <div class="form-group ">
                    <label for="catagoryStatus">Status</label>
                    <div class="d-flex align-items-center">
                        <div class="form-check mr-2">
                            <input class="form-check-input" type="radio" value="{{$childcategory->status}}" name="status" checked="">
                            <label class="form-check-label">Active</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="{{$childcategory->status}}" name="status">
                            <label class="form-check-label">In Active</label>
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary shadow">Update Catagory</button>
            </form>
        </div>
    </div>
</div>
</section>
@endsection
