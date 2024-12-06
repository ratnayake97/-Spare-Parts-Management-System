@extends('layouts.layoutC')

@section('title')
    <title>View Order</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid tMargin">
    <div id="header-area-Order"><b>Order List</b></div>
        <!-- table -->
        <table class="table table-striped text-center" id="product-table">
            <thead>
                <tr>
                    <th scope="col">Index</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Model</th>
                    <th scope="col">Brand</th>
                    <th scope="col">No of Items</th>
                    <th scope="col">Price Per Unit </th>
                    <th scope="col">Payment Details</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product-> customerName }}</td>
                    <td>{{ $product->contactNumber }}</td>
                    <td>{{ $product->itemName }}</td>
                    <td>{{ $product->model }}</td>
                    <td>{{ $product->brand }}</td>
                    <td>{{ $product->noofItems }}</td>
                    <td>{{ $product->pricePerUnit }}</td>
                    <td>{{ $product->paymentDetails }}</td>
                    <td>
                        <a href={{ "/customer/product/edit/".$product->id }} type="button" class="btn btn-primary">Update</a>
                        <a href={{ "/customer/product/delete/".$product->id."?pid=".$product->productID }} type="button" onclick="deleteAlert()" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection