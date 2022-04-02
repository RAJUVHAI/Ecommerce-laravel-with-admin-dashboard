@extends('layouts.admin')
@section('title', 'subscriber')
@section('content')

<div class="container-fluid">
    <div class="card">
            <div class="card-header">
                <div class="card-title">
                  Subscriber
                </div>
                
            </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">SL No.</th>
                        <th class="text-info">Email</th>
                        <th class="text-info">Action/Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bd Task</td>
                        <td><a href="#"> <i class="fa fa-pencil-square-o px-2  m-2 btn btn-primary" aria-hidden="true"></i></a></td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>





@endsection
