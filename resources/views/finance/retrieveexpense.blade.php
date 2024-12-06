<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <style>
        .footer {position: absolute; right:0; left: 0;bottom: 0; width: 100%; background-color:  #148DDD;color: white;text-align: center;text-align: center;}.header {overflow: hidden;background-color: dodgerblue;padding: 20px 10px;}
        .header a { float: left;color: white;text-align: center;padding: 10px;text-decoration: none;font-size: 20px; line-height: 25px;border-radius: 4px; }.header a.logo {font-size: 30px;font-weight: bold;}
        .headerlogo{padding-bottom:40px;padding-left:5px;	}  
        .header a:hover {background-color: #45A7E9;color: black;} .header a.active {color: black;}.header-right {float: right;}@media screen and (max-width: 500px) {.header a {float: none;display: block;text-align: left;}  .header-right {float: none; padding-top: 5%;}}
        #body {padding: 10px;/*padding-top: 8%; */padding-bottom: 3%; /* Height of the footer */}
        .header {background-image: url("/images/backimg.jpg");background-size: cover;width: 100%;height: 300px;background-position : center;background-repeat: no-repeat;}  
    
        .border {
            border-radius: 5px;
            background-color: #ffffff  ;
            padding: 20px;
            }  
        .background {
        background-image:url("/images/blue.jpg");
        background-size: cover;
  
        }  
    </style>
    
    <title>View Expense Details</title>
</head>
<body>

<header>
<div class="header">
    <img  class="headerlogo" src="/images/logonew.png" width="500px" height="300px">
    <div class="btn-group" role="group" style="float:right; background-color:#006699!important;">
        <a class="" href="#">Home</a>
        <a class="" href="#">Sign up</a>
        <a class="" href="#">Admin login</a>
        <a class="" href="#">Contact us</a>
        <a class="" href="#">About us</a>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button style="background-color:#3385ff!important;"class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>    
</div>
</header>
<div class="background">
    <div id="body">
   

    <div class="container">
        <div class="row">
        <h2 style="text-align:center"><u>View Expense Details</u></h2>
        </br></br></br></br>
            <div class ="col-md-12">

                    @foreach($errors->all() as $error)
                        <div class= "alert alert-danger" role="alert">
                            {{$error}}
                        </div>
                    @endforeach

                <table class="table table-primary table-striped">
                    <thead class="thead-dark">
                        <tr>
                          
                            <th scope="col">Reference Number</th>
                            <th scope="col">Transaction Date</th>
                            <th scope="col">Amount in LKR</th>
                            <th scope="col">Expense Category</th>
                            <th scope="col">Discount in LKR</th>
                            <th scope="col">Expense Description</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $expense)
                            <tr>
                                <td>{{$expense -> expense_refno}}</td>
                                <td>{{$expense -> transaction_date}}</td>
                                <td>{{$expense -> expense_amount}}</td>
                                <td>{{$expense -> expense_category}}</td>
                                <td>{{$expense -> expense_discount}}</td>
                                <td>{{$expense -> expense_description}}</td>
                                
                                <td>
                                    <a href="/updateexpense/{{$expense -> payment_number}}" class="btn btn-info">Update</a>
                                    <a href="/deleteexpense/{{$expense->payment_number}}" class="btn btn-info" onclick="return confirm('Do you really want to delete?')">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                
                    </tbody>
                </table>
                <a href="/financesub" class="btn btn-success" style="color:white;">Back</a>
            </div>
            
        </div>
    </div>
    </div>
</div>
<footer class = "clearfix" style = "padding: 20px; background-color:#1E5981; color:white;" >
<table style="width: 80%;" align="center">
    <tr>
        <td>
            <p><b>Services</b><br>Order Management<br>Employee Management<br>Stock Management<br>Finance Management</p>
        </td>
        <td>
        <p><b>Contact Us</b><br>HotLine: +9411 2729568<br>Phone: +9411 2123789<br>E-mail: araispareparts@gmail.com <br>  
        </td>
        <td>
        <p><b>Follow Us On,</b></p>
            <div>
                <a href="https://www.facebook.com/" target="blank"><img class="social" title="facebook" src="images/facebook.png" alt="Facebook" width="30px"></a>
                <a href="https://www.instagram.com/" target="blank"><img class="social" title="instagram" src="images/instagram.png" alt="Instagram" width="30px"></a>
                <a href="https://www.twitter.com/" target="blank"><img class="social" title="twitter" src="images/twitter.png" alt="twitter" width="30px"></a>
            </div>
        </td>
    </tr>
</table>		

<hr width="100%">	
    
<p align="center">Copyright 2022 @ Arai(PVT)LTD.
    <br>All rights reserved
    <br>
</p>						
</footer>

</body>
</html>
