@extends('layouts.admin')
@section('title', 'ordertable')
@section('content')

<div class="container-fluid">

    <div class=" card p-2">
        <div class="card-header card-title">
            <h3>Add Order</h3>
        </div>
        <form class="p-2">
            <div class="d-flex justify-content-between">
                <div class="order_l_hand col-lg-6">
                    <div class="form-group">
                        <label for="I_d">ID</label>
                        <input type="text" class="form-control" id="I_d" placeholder="Order ID" required>

                    </div>
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" required>

                    </div>

                    <div class="form-group">
                        <label for="descrip" >Address</label>
                        <textarea class="form-control" name="details" id="" cols="80" rows="7" id="descrip"required></textarea>
                    </div>
                </div>

                <div class="product_r_hand col-lg-4">
                    <div class="form-group">
                        <label for="Order_at">Order At</label>
                        <input type="date" class="form-control" id="Order_at"required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" required>
                    </div>
                    <div class="form-group ">
                        <label for="Buying">SKU</label>
                        <input type="number" class="form-control" id="Buying" required>
                    </div>
                    <div class="form-group ">
                        <label for="mrp">Qty</label>
                        <input type="number" class="form-control" id="mrp" required>
                    </div>
                    <div class="form-group ">
                        <label for="selling">Total Price</label>
                        <input type="number" class="form-control" id="selling" required>
                    </div>
                    <div class="form-group ">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" required>
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
            </div>


        </form>
    </div>
</div>




@endsection
