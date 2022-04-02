@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box account__summary">
                        <div class="inner">
                            <h3 class="counter">150</h3>

                            <p>Total Customer</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box add__product">
                        <div class="inner">
                            <h3 class="counter" >53</h3>

                            <p>Total Product</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div style="color: white;" class="small-box new__invoice">
                        <div class="inner">
                            <h3 class="text-white counter">44</h3>

                            <p class="text__color">New Order</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer text__color text-white ">More info
                            <i class="fas fa-arrow-circle-right text-white"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box purses__report">
                        <div class="inner">
                            <h3 class="counter">65</h3>

                            <p>Total Sale</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
    </div>
</section>

<section>
    <div class="container-fluid">
<div class="row mt-5 ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="invoice p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/pos_invoice.png" alt="">
                                <p> Create POS Invoice </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="new__invoice p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/create_invoice.png" alt="">
                                <p>Create New Invoice</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="add__product  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-product.png" alt="">
                                <p>Add Product</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="add__customer  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-customer.png" alt="">
                                <p>Add Customer</p>
                            </div>
                        </div>   
                        
                        <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="sales__report  p-3 h5 text-center ">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/pos_invoice.png" alt="">
                                <p> Sales Report </p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="purses__report  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/create_invoice.png" alt="">
                                <p>Purses Report</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="stock__report  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-product.png" alt="">
                                <p>Stock Report</p>
                            </div>
                        </div>

                        <div class="col">
                            <div class="account__summary  p-3 h5 text-center">
                                <img class="w-25" src="https://isshue.bdtask.com/isshue_v4_demo4/my-assets/image/dashboard/add-customer.png" alt="">
                                <p>Account Summary</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div >
            <div >




                    </div>
                </div>
            </div>
            </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- Total Users Start-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Total Users</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">820</span>
                                <span>Users Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 12.5%
                                </span>
                                <span class="text-muted">Since last week</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="visitors-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This Week
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last Week
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total Users End -->
            <!-- Total sale start-->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header border-0">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Total Sales</h3>

                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <p class="d-flex flex-column">
                                <span class="text-bold text-lg">$18,230.00</span>
                                <span>Sales Over Time</span>
                            </p>
                            <p class="ml-auto d-flex flex-column text-right">
                                <span class="text-success">
                                    <i class="fas fa-arrow-up"></i> 33.1%
                                </span>
                                <span class="text-muted">Since last month</span>
                            </p>
                        </div>
                        <!-- /.d-flex -->

                        <div class="position-relative mb-4">
                            <canvas id="sales-chart" height="200"></canvas>
                        </div>

                        <div class="d-flex flex-row justify-content-end">
                            <span class="mr-2">
                                <i class="fas fa-square text-primary"></i> This year
                            </span>

                            <span>
                                <i class="fas fa-square text-gray"></i> Last year
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Total sale end -->
        </div>

        <!-- leatest product Start -->

        <div class="row">
            <div class="col-12">
                <!-- /.card -->
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title font-weight-bold">Latest Product</h1>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-info">ID</th>
                                    <th class="text-info">Image</th>
                                    <th class="text-info">product Name</th>
                                    <th class="text-info">Catagory</th>
                                    <th class="text-info">Buying Price</th>
                                    <th class="text-info">MRP Price</th>
                                    <th class="text-info">Selling Price</th>
                                    <th class="text-info">Offer Price</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($latest_product as $value)
                                <tr>
                                    <td>#{{ $value->id }}</td>
                                    <td><img src="{{ asset('storage/product-image/'.$value->image) }}" width="50"
                                            height="50"></td>
                                    <td>{{ $value->p_name }}</td>
                                    <td>{{ $value->c_name }}</td>
                                    <td>{{ $value->quantity }}</td>
                                    <td>{{ $value->b_price }}</td>
                                    <td>{{ $value->mrp_price }}</td>
                                    <td>{{ $value->s_price }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>

        <!-- lateast product End-->
    </div>

</section>


@endsection
