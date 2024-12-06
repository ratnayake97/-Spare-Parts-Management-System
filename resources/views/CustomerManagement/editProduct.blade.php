@extends('layouts.layoutC')

@section('title')
    <title>Update Product</title>
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
                <!-- form -->
                <form action="/customer/product/edit/" method="POST">
                    @csrf
                    <div class="row mb-3 mt-3">
                        <label for="id" class="col-sm-2 col-form-label">Id <span class="reqField"></label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="id" name="id" value="{{ $product->id }}" disabled>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="customerName" class="col-sm-2 col-form-label">Customer Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="customerName" name="customerName" value="{{ $product->customerName }}" required>
                        </div>
                    </div>
                    <div class="row mb-3 mt-3">
                        <label for="contactNumber" class="col-sm-2 col-form-label">Contact Number <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="contactNumber" name="contactNumber" value="{{ $product->contactNumber }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="itemName" class="col-sm-2 col-form-label">Item Name <span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="itemName" name="itemName" value="{{ $product->itemName }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="model" class="col-sm-2 col-form-label">Model<span class="reqField">(*)</span></label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                        <div class="col-sm-10">

                            <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="noofItems" class="col-sm-2 col-form-label">No of Items <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" class="form-control" id="noofItems" name="noofItems" value="{{ $product->noofItems }}" required>
                        </div>
                        <label for="pricePerUnit" class="col-sm-2 col-form-label">Price per one Items <span class="reqField">(*)</span></label>
                        <div class="col-sm-4">
                            <input type="number" step="0.01" class="form-control" id="pricePerUnit" name="pricePerUnit"
                                value="{{ $product->pricePerUnit }}" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="paymentDetails" class="col-sm-2 col-form-label">Payment Details</label>
                        <div class="col-sm-10">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="cash" <?php echo ($product->paymentDetails =='Cash')? 'checked':'' ?> value="Cash">
                                <label class="form-check-label" for="cash">Cash</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="card" <?php echo ($product->paymentDetails =='Card Payment')? 'checked':'' ?> value="Card Payment">
                                <label class="form-check-label" for="cardPayment">Card Payment</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="paymentDetails" id="paymentViaChecks" <?php echo ($product->paymentDetails =='Payment Via Checks')? 'checked':'' ?> value="Payment Via Checks">
                                <label class="form-check-label" for="paymentViaChecks">Payment Via Checks</label>
                            </div>
                        </div>
                    </div>
                    {{-- Required indicator --}}
                    <div class="row mb-3">
                        <span class="reqField">(*) is Required</span>
                    </div>
                    <!-- submit button -->
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <button type="submit" class="btn btn-primary mb-3 float-end">Update</button>
                    <button type="submit" class="btn btn-danger mb-3 float-end" style="margin-right: 10px">
                    <a href="/order" id="home-button" style="color:white; text-decoration: none">
                        Cancel
            </a>    </button>
                </form>
            </div>

        </div>
    </div>
@endsection