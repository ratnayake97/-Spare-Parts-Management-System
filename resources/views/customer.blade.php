@extends('layouts.layoutC')

@section('title')
    <title>Home</title>
@endsection

@section('content')
    <!-- contant -->
    <div class="container-fluid">
        <div class="row">
          <!-- side bar -->
          <div class="col-sm-2 side-bar">
            <a href="/" id="home-button" class="btn btn-primary">
              <i class="bi bi-house-door-fill"></i> Home
            </a>
          </div>
          <div class="col-sm-10 main-section">
            <div id="header-area"><b>ORDER MANAGEMENT</b></div>
            <div class="button-area">
              <img src="img/insert2.png" class="button-image" alt="" />
              <a href="/customer/create" type="button" class="btn btn-primary main-button"
                >Insert Order</a
              >
            </div>
            <div class="button-area">
                <img src="/img/logonew.png" class="button-image" alt="" />
                <!-- <a href="/customer/order" class="btn btn-primary main-button">View Order</a> --> 
            </div>
            <div class="button-area">
              <img src="img/view2.png" class="button-image" alt="" />
              <a href="/customer/product" class="btn btn-primary main-button">View Order</a>
            </div>
          </div>
        </div>
    </div>
@endsection