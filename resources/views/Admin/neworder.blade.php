@extends('layouts.admin')
@section('title', 'neworder')
@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-between mb-3">
        <div class=""></div>
        <a href="{{route('ordertable')}}"><button type="submit" class="btn btn-primary"><i
                    class="fas fa-plus-circle mr-2"></i>Add Order</button>
        </a>
    </div>
    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3>Order List</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th class="text-info">ID</th>
                                <th class="text-info">User Name</th>

                                <th class="text-info">Address(s)</th>
                                <th class="text-info">Phone</th>
                                <th class="text-info">Order At</th>
                                <th class="text-info">SKU</th>
                                <th class="text-info">Total Price</th>
                                <th class="text-info">Status</th>
                                <th class="text-info">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Arman</td>

                                <td>Dhaka,Bangladesh</td>
                                <td>+1235465455 </td>
                                <td>22 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>Received</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hasan</td>

                                <td>Rajshahi,Bangladesh</td>
                                <td>+12356875455 </td>
                                <td>20 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raju</td>

                                <td>Khulna,Bangladesh</td>
                                <td>+12656875455 </td>
                                <td>21 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>Received</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nawshad</td>

                                <td>Narayangoanj,Bangladesh</td>
                                <td>+124455455 </td>
                                <td>18 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>Delivered</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sayedd</td>

                                <td>Tongi,Bangladesh</td>
                                <td>+12449885455 </td>
                                <td>17 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 250</td>
                                <td>Received</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Rocky</td>

                                <td>Comilla,Bangladesh</td>
                                <td>+1244665455 </td>
                                <td>16 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 50</td>
                                <td>Received</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Delivered</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Pending</td>
                                <td> <a href="{{route('updateorder')}}"><i class="fas fa-eye btn btn-primary "></i></a>
                                </td>
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


</div>




@endsection
