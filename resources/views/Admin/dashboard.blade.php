@extends('layouts.admin')
@section('title', 'dashboard')
@section('content')

<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg_customer">
                    <div class="inner">
                        <h3>150</h3>

                        <p>New Order</p>
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
                <div class="small-box bg_product">
                    <div class="inner ">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>

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
                <div class="small-box bg_order">
                    <div class="inner">
                        <h3>44</h3>

                        <p>Total User</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg_sale">
                    <div class="inner">
                        <h3>65</h3>

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
                                <tr>
                                    <td>1</td>
                                    <td>#</td>
                                    <td>HP</td>
                                    <td>Laptop</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 10</td>
                                    <td>&#36; 50</td>


                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>##</td>
                                    <td>Tv-Samsung-65UH8500</td>
                                    <td>Tv</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 100</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>#</td>
                                    <td>Apple Press</td>
                                    <td>T-Shirt</td>
                                    <td> &#36; 20</td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 200</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>#</td>
                                    <td>Laptop-Apple-2021 </td>
                                    <td>Laptop</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 200</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>#</td>
                                    <td>Blue Stars</td>
                                    <td>Ac</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 250</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>#</td>
                                    <td>Apple Press</td>
                                    <td>T-Shirt</td>
                                    <td> &#36; 20</td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 50</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>#</td>
                                    <td>Shoes-Nike-A5 </td>
                                    <td>Shoes</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 100</td>
                                    <td>&#36; 50</td>

                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>#</td>
                                    <td>Shoes-Nike-A5 </td>
                                    <td>Shoes</td>
                                    <td>&#36; 20 </td>
                                    <td>&#36; 25</td>
                                    <td>&#36; 100</td>
                                    <td>&#36; 50</td>

                                </tr>
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

