@extends('layouts.layoutC')

@section('title')
    <title>View Order</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid tMargin">
    <div id="header-area-product"><b>Order List</b></div>
        <!-- table -->
        <table class="table table-striped text-center" id="product-table">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Supplier Name</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Product ID</th>
                    <th scope="col">Order Status</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                <tr>
                    <th scope="row">{{ $order->id }}</th>
                    <td>{{ $order->supplierName }}</td>
                    <td>{{ $order->companyName }}</td>
                    <td>{{ $order->productID }}</td>
                    <td>{{ $order->orderStatus }}</td>
                    <td>{{ $order->dates }}</td>
                    <td>
                        <a href={{ "/customer/order/edit/".$order->id }} type="button" class="btn btn-primary">Update</a>
                        <a href={{ "/customer/order/delete/".$order->id }} type="button" onclick="deleteAlert()" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection