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
        #body {padding: 5px;/*padding-top: 8%; */padding-bottom: 3%; /* Height of the footer */}
        .header {background-image: url("/images/backimg.jpg");background-size: cover;width: 100%;height: 300px;background-position : center;background-repeat: no-repeat;}  
    </style>
    
    <title>Update Income Details</title>
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
<br>
<div id="body">
   

    <div class="container">
        <div class="row">
            <div class="col align-self-start">
               <div class ="col-md-10">
                 
                    <form action="/updateIncome"  method="post" >
                        {{csrf_field()}}
                       
                            <h2>Manage Bussiness Income Here!</h2>
                            <br>
                            
                            <label class="form-label"></label>
                            <input type="hidden" class="form-control"  name="invoicenum" value="{{$incomedata -> invoice_number}}" readonly>
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                            <br>
                            <label class="form-label">Income Reference Number</label>
                            <input type="text" class="form-control" name="inref" value="{{$incomedata -> income_refno}}">
                            @error('Income Reference Number')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br>
                            <label class="form-label">Trasaction Date</label>
                            <input type="date" class="form-control" name="intransdate" value="{{$incomedata -> transaction_date}}">
                            @error('Transaction Date')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br>
                            <label class="form-label">Amount</label>
                            <input type="text" class="form-control" name="incomeamount" value="{{$incomedata -> income_amount}}">
                            @error('Income Amount')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br>

                            <label class="form-label">Income Category</label>
                                <select name = "incomecategory" class="form-control">
                                @error('Income Category')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                    <option value = "hidden" disabled selected>{{$incomedata -> income_category}}</option>
                                    <option value = "Sales Income"> Sales Income </option>
                                    <option value = "Interest Income"> Interest Income </option>
                                    <option value = "Commission Income">Commission Income </option>
                                    <option value = "Individual Order Income"> Individual Order Income</option>
                                    <option value = "Wholesale Income"> Wholesale Income </option>
                                </select>
                            <br>
                            <label class="form-label">Discount Recieved</label>
                            <input type="text" class="form-control" name="indiscount" value="{{$incomedata -> income_discount}}" placeholder="No any discount">
                            <br>
                            <label class="form-label">Description</label>
                            <input type="text" class="form-control" name="indescription" value="{{$incomedata -> income_description}}">
                            @error('Income Description')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <br><br>
                            <button type="submit" class="btn btn-primary">Update Details</button>
                            <br><br>
                    </form>
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
                <a href="https://www.facebook.com/" target="blank"><img class="social" title="facebook" src="../images/facebook.png" alt="Facebook" width="30px"></a>
                <a href="https://www.instagram.com/" target="blank"><img class="social" title="instagram" src="../images/instagram.png" alt="Instagram" width="30px"></a>
                <a href="https://www.twitter.com/" target="blank"><img class="social" title="twitter" src="../saaa`1                                            eimages/twitter.png" alt="twitter" width="30px"></a>
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
