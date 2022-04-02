@extends('layouts.admin')
@section('title', 'user')
@section('content')

<div class="container-fluid">
    <div class="col-md-4">
        <!-- Widget: user widget style 1 -->
        <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
                <h3 class="widget-user-username">Arman Hosen</h3>
                <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle elevation-2" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            
            <div class="card-footer">
            <a href="#" class=" bg-info d-block text-center p-2  my-3 ">
                View Full Profile
            </a>
                <div class="row">
               
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">3,200</h5>
                            <span class="description-text">SALES</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">13,000</h5>
                            <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">35</h5>
                            <span class="description-text">PRODUCTS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->
    </div>
    

</div>



@endsection
