@extends('layouts.admin')
@section('title', 'deliveryinfo')
@section('content')

<div class="container-fluid">
    <div class="card">
            <div class="card-header">
                <div class="card-title">
                   Delivery info
                </div>
                
            </div>

        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-info">SL No.</th>
                        <th class="text-info">User Id</th>
                        <th class="text-info">Amount</th>
                        <th class="text-info">Payment Method</th>
                        <th class="text-info">Fees</th>
                        <th class="text-info">Comments</th>
                        <th class="text-info">Date</th>
                        <th class="text-info">Action/Status</th>


                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bd Task</td>
                        <td>4250</td>
                        <td>Bkash</td>
                        <td>0.55</td>
                        <td>OM Name: Demo</br>
                            OM Phone No: +8801317584839</br>
                            Transaction No: 12156842565</br>
                            ID Card No: 778 797 897
                        </td>
                        <td>16th February 2021</td>
                        <td><a href="{{route('editdeliveryinfo')}}"> <i class="fa fa-pencil-square-o px-2  m-2 btn btn-primary" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Bd Task</td>
                        <td>4250</td>
                        <td>Bkash</td>
                        <td>0.55</td>
                        <td>OM Name: Demo</br>
                            OM Phone No: +8801317584839</br>
                            Transaction No: 12156842565</br>
                            ID Card No: 778 797 897
                        </td>
                        <td>16th February 2021</td>
                        <td><a href="{{route('editdeliveryinfo')}}"> <i class="fa fa-pencil-square-o px-2  m-2 btn btn-primary" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Bd Task</td>
                        <td>4250</td>
                        <td>Bkash</td>
                        <td>0.55</td>
                        <td>OM Name: Demo</br>
                            OM Phone No: +8801317584839</br>
                            Transaction No: 12156842565</br>
                            ID Card No: 778 797 897
                        </td>
                        <td>16th February 2021</td>
                        <td><a href="{{route('editdeliveryinfo')}}"> <i class="fa fa-pencil-square-o px-2  m-2 btn btn-primary" aria-hidden="true"></i></a></td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Bd Task</td>
                        <td>4250</td>
                        <td>Bkash</td>
                        <td>0.55</td>
                        <td>OM Name: Demo</br>
                            OM Phone No: +8801317584839</br>
                            Transaction No: 12156842565</br>
                            ID Card No: 778 797 897
                        </td>
                        <td>16th February 2021</td>
                        <td><a href="{{route('editdeliveryinfo')}}"> <i class="fa fa-pencil-square-o px-2  m-2 btn btn-primary" aria-hidden="true"></i></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.card-body -->
</div>





@endsection
