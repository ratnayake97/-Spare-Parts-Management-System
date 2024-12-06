@extends('layouts.layoutC')

@section('title')
    <title>Insert Product</title>
@endsection

@section('content')
    <!-- content -->
    <div class="container-fluid">
        <!-- side bar -->
        <div class="row">
            <div class="col-sm-2 side-bar">
            <a href="/order" id="home-button" class="btn btn-primary">
              <i class="bi bi-house-door-fill"></i> Home
            </a>
            </div>

            <!-- web form -->
            <div class="col-sm-10 main-section">
                <br />
                <h1 style="text-align: center">New Order</h1>
                <br />
                <!-- form -->
                <form action="/customer/store" method="POST">
                    @csrf
                    <div class="row mb-3 mt-3">
                        <label for="customerName" class="col-sm-2 col-form-label">Customer Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customerName" name="customerName" placeholder="" required>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="contactNumber" class="col-sm-2 col-form-label">Contact Number <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="contactNumber" name="contactNumber" placeholder=""  required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="itemName" class="col-sm-2 col-form-label">Item Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="itemName" name="itemName" placeholder="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="model" class="col-sm-2 col-form-label">Model<span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" name="model" placeholder="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="brand" class="col-sm-2 col-form-label">Brand<span class="reqField">(*)</span></label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control" id="brand" name="brand" placeholder="" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="noofItems" class="col-sm-2 col-form-label">No of Items <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="noofItems" name="noofItems" placeholder="" required>
                        </div>
                        <label for="pricePerUnit" class="col-sm-2 col-form-label">Price per one Items <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" step="0.01" class="form-control" id="pricePerUnit" name="pricePerUnit"
                                placeholder="" required>
                        </div>
                    </div>
                    {{-- Order Status --}}
                    <div class="row mb-3">
                        <label for="paymentDetails" class="col-sm-2 col-form-label">Payment Details</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="cash" value="Cash">
                                <label class="form-check-label" for="cash">Cash</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="card" value="Card Payment">
                                <label class="form-check-label" for="cardPayment">Card Payment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="paymentViaChecks" value="Payment Via Checks">
                                <label class="form-check-label" for="paymentViaChecks">Payment Via Checks</label>
                            </div>
                        </div>
                    </div>
                    {{-- Required indicator --}}
                    <div class="row mb-3">
                        <span class="reqField">(*) is Required</span>
                    </div>
                    <!-- submit button -->
                    <button type="submit" class="btn btn-primary mb-3 float-end">Submit</button>
                </form>
            </div>

        </div>
    </div>
@endsection