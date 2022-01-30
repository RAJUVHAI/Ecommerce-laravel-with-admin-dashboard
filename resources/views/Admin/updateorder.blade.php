@extends('layouts.admin')
@section('title', 'manageproduct')
@section('content')

<div class="container-fluid">
    <div class="mb-4 text-center">
        <h2>Order Details</h2>

    </div>
    <div class="invoice-wrapper d-flex justify-content-center">
        <div class="wrapper col-lg-8  invoice_wrap p-5">
            <div class="box-wrapper  d-flex justify-content-between">
                <div class="short-box mb-3">
                    <h3>General</h3>
                    <form>
                        <div class="form-group">
                            <label for="date">Date Created</label>
                            <input type="date" class="form-control" id="date" aria-describedby="emailHelp"
                                placeholde="12/10/2022">

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

                    </form>
                </div>
                <div class="short-box mb-3">
                    <h3>Billing</h3>
                    <div class="billing-text">
                        <h6>Arman Hosen</h6>
                        <h6>Khilkhet,Dhaka</h6>
                        <h6>Bangladesh</h6>
                        <h6>1229</h6>
                    </div>
                </div>
                <div class="short-box mb-3">
                    <h3>Shipping</h3>
                    <div class="shipping-text">
                        <h6>Address:</h6>
                        <h6>Customer Provided a note:</h6>
                    </div>
                </div>
            </div>
            <div class="payment-section text-center">
                <div class="image">
                    <img class="" src="{{asset('dist/img/bkash.png')}}">
                </div>
                <div class="pay-text">
                    <p>Bkash: 016********</p>
                    <p>Transaction ID: ***************</p>
                </div>
            </div>
            <div class="price-table mt-5">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" colspan="4">Item</th>
                            <th scope="col">Cost</th>
                            <th scope="col">Qty.</th>
                            <th scope="col">Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4">Fashion</td>
                            <td>500</td>
                            <td>* 5</td>
                            <td>2500</td>

                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <div class="d-flex justify-content-between">
                <strong>Bkash Charge</strong> <span>&#2547; 46.00</span>
                </div>
                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="total-price float-right text-right">
                <h6>Items Subtotal: <strong> 2500 &#2547;</strong></h6>
                <h6>Fees: <strong>46 &#2547; </strong> </h6>
                <h6>Order Total: <strong> 2546 &#2547; </strong></h6>
            </div>
        </div>


    </div>

</div>



@endsection
