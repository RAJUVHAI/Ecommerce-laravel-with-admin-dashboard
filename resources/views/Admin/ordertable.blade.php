@extends('layouts.admin')
@section('title', 'ordertable')
@section('content')

<div class="container-fluid">
    <div class="ml-4">
        <h2>Add New Order</h2>

    </div>
    <div class="mt-5">
        <form class="d-flex justify-content-around">
            <div class="order_l_hand col-lg-8">
                <div class="form-group">
                    <label for="I_d">ID</label>
                    <input type="text" class="form-control form-control-md" id="I_d" placeholder="Order ID">

                </div>
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" class="form-control form-control-md" id="username" placeholder="Username">

                </div>

                <div class="form-group">
                    <label for="descrip" class="d-block">Address</label>
                    <textarea name="details" id="" cols="82" rows="7" id="descrip"></textarea>

                </div>


            </div>

            <div class="product_r_hand col-lg-3">
                <div class="form-group">
                    <label for="Order_at">Order At</label>
                    <input type="date" class="form-control" id="Order_at">

                </div>

                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone">

                </div>

                <div class="form-group ">
                    <label for="status">Status</label>
                    <select class="form-control" id="status">
                        <option>Pending Payment</option>
                        <option>proccessing</option>
                        <option>Completed</option>
                        <option>On Hold</option>
                        <option>Refunded</option>
                        <option>Failed</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>



        </form>
        <div class="bg-light col-lg-8  p-4 ">
            <table class="table ">
                <thead>
                    <tr class="">
                        <th></th>
                        <th scope="col">SKU</th>
                        <th scope="col">Qty.</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td colspan="2"><input class="" type="number" placeholder="0.00"></td>
                        
                        <td><input class="" type="number" placeholder="0.00"></td>
                        <td><input class="" type="number" placeholder="Total Price"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


</div>




@endsection
