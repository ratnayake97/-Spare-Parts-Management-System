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
    </style>
    <!-- <link rel="stylesheet" href="/css/style2.css"> -->
    <title>Main Menu</title>

</head>
<body>

<header>

<div class="header">
    
    <img  class="headerlogo" src="images/logonew.png" width="500px" height="300px"> 
    <div class="header-right">
        <a class="active" href="/">Home</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>
        <a href="#e">Sign up</a>
        <a href="#cot">Admin Login</a>

        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
        </form>
    </div>
    
</div>

</header>
<br>
<br>
<div id="body">
    <div class="col d-flex justify-content-center">
        <div class="row">
            <div class="card  bg-info mb-3" style="width: 20rem;">
            <img class="card-img-top" src="submenuimages/stockm.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Order Management</h5>
                <p class="card-text">You can manage all the order details in here.</p>
                <a href="/order" class="btn btn-danger">Manage</a>
            </div>
            </div>

            &nbsp  &nbsp  &nbsp &nbsp
            &nbsp  &nbsp  &nbsp &nbsp
            <div class="card bg-info mb-3" style="width: 20rem;">
            <img class="card-img-top" src="submenuimages/empm.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Employee Management</h5>
                <p class="card-text">You can manage all the employee details in here.</p>
                <br>
                <a href="/emphome" class="btn btn-danger">Manage</a>
            </div>
            </div>

            &nbsp  &nbsp  &nbsp &nbsp
            &nbsp  &nbsp  &nbsp &nbsp
            <div class="card bg-info mb-3" style="width: 20rem;">
            <img class="card-img-top" src="submenuimages/financem.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Finance Management</h5>
                <p class="card-text">You can manage all the income details and expense details in here.</p>
                <br>
                <a href="/financesub" class="btn btn-danger">Manage</a>
            </div>
            </div>

            &nbsp  &nbsp  &nbsp &nbsp
            &nbsp  &nbsp  &nbsp &nbsp
            <div class="card  bg-info mb-3" style="width: 20rem;">
            <img class="card-img-top" src="submenuimages/stockm2.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Stock Management</h5>
                <p class="card-text">You can manage all the stock details in here.</p>
                <br>
                <a href="/home" class="btn btn-danger">Manage</a>
            </div>
            </div>
        </div>
    </div>
        <br>
    
</div>

<footer class = "clearfix" style = "padding: 20px; background-color:#1E5981; color:white;" >
<table style="width: 80%;" align="center">
    <tr>
        <td>
            <p><b>Services</b><br> Order Management<br>Employee Management<br>Stock Management<br>Finance Management</p>
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
