@extends('layouts.admin')
@section('title', 'manageorder')
@section('content')

<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <!-- /.card -->
            <div class="card">
                <div class="card-header card-title">
                    <h3>Manage Order List</h3>
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
                                <td>On Hold</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Hasan</td>

                                <td>Rajshahi,Bangladesh</td>
                                <td>+12356875455 </td>
                                <td>20 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Procced</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Raju</td>

                                <td>Khulna,Bangladesh</td>
                                <td>+12656875455 </td>
                                <td>21 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>On Hold</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Nawshad</td>

                                <td>Narayangoanj,Bangladesh</td>
                                <td>+124455455 </td>
                                <td>18 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 200</td>
                                <td>Procced</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sayedd</td>

                                <td>Tongi,Bangladesh</td>
                                <td>+12449885455 </td>
                                <td>17 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 250</td>
                                <td>Refund</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Rocky</td>

                                <td>Comilla,Bangladesh</td>
                                <td>+1244665455 </td>
                                <td>16 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 50</td>
                                <td>On Hold</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Procced</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>On HOld</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>procced</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Refund</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Sadid</td>

                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>On Hold</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Refund</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>procced</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>Refund</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>procced</td>
                                <td> <button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Sadid</td>
                                <td>Chapai,Bangladesh</td>
                                <td>+16565455 </td>
                                <td>15 Jan, 2022</td>
                                <td>----</td>
                                <td>&#36; 100</td>
                                <td>On Hold</td>
                                <td><button type="submit" class="btn btn-danger "><i class="far fa-trash-alt "></i>
                                    </button>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModalCenter">
                                        <i class="fas fa-edit"></i>
                                    </button></td>
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
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Update Your Order List
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="form-group col-lg-6">
                            <label for="exampleInputEmail1">Edit Status</label>
                            <select class="form-control form-control-md">
                                <option>Pending Payment</option>
                                <option>Proccessing</option>
                                <option>Completed</option>
                                <option>Cancelled</option>
                                <option>Refunded</option>
                                <option>Failed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <table class="table ">
                                <thead>
                                    <tr class="">
                                        <th scope="col">SKU</th>
                                        <th scope="col">Qty.</th>
                                        <th scope="col">Total Price</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="">
                                        <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                        <td><input class="col-lg-10" type="number" placeholder="0.00"></td>
                                        <td><input class="col-lg-10" type="number" placeholder="0.00"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save
                        changes</button>
                </div>
            </div>
        </div>
    </div>

</div>




@endsection
