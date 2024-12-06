<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">

    <style>
              .navbar {
        width: 100%;
        background-color:#85adad;
        overflow: auto;
    }
    
    .navbar a {
        float: left;
        padding: 10px;
        color: white;
        text-decoration: none;
        font-size: 17px;
        margin-right: 50px;
    }
    
    .navbar a:hover {
        background-color:	 #4d79ff;
        color: white;
    }
    
    .active1 {
        background-color: #006bb3;
        margin-left: 50px;
    }
    
    @media screen and (max-width: 500px) {
        .navbar a {
            float: none;
            display: block;
        }}


        .footer {position: absolute; right:0; left: 0;bottom: 0; width: 100%; background-color:  #148DDD;color: white;text-align: center;text-align: center;}.header {overflow: hidden;background-color: dodgerblue;padding: 20px 10px;}
        .header a { float: left;color: black;text-align: center;padding: 10px;text-decoration: none;font-size: 20px; line-height: 25px;border-radius: 4px; }.header a.logo {font-size: 30px;font-weight: bold;}
        .headerlogo{padding-bottom:40px;padding-left:5px;	}  
        .header a:hover {background-color: navy;color: white;} .header a.active {color: whitesmoke;background-color: navy;}.header-right {float: right;}@media screen and (max-width: 500px) {.header a {float: none;display: block;text-align: left;}  .header-right {float: none; padding-top: 5%;}}
        #body {padding: 10px;/*padding-top: 8%; */padding-bottom: 25%; /* Height of the footer */}

        .header {
            background-image: url("/images/backimg.jpg");
            background-size: cover;
            width: 100%;
            height: 300px;
            background-position : center;
            background-repeat: no-repeat;
    } 

    </style>
    
    
</head>

<body>
   
<header>

<div class="header">
    
    <img  class="headerlogo" src="/images/logonew.png" width="500px" height="300px">
  
 
    <div class="header-right">
        <a class="active" href="/mainmenu">Home</a>
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


<div class="navbar container-fuild" style="font-size: 18px;">
  <a class="active1" href="/empHome"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="{{ route('employees.index') }}"><i class="fa fa-fw fa-home"></i> View Employees</a> 
  <a href="{{ route('employees.create') }}"><i class="fa fa-fw fa-user-circle"></i> Add new employee</a> 
  <a href="{{ route('attendence.index') }}"><i class="fa fa-fw fa-user"></i> View Attendence</a> 
  <a href="/download-pdf"><i class="fa fa-fw fa-file-text"></i> Download PDF</a>
  
</div>


    <div class="container">
       
        @yield('content')
    </div>


    
<br><br><br><br><br><br>
<footer class = "clearfix" style = "padding: 20px; background-color:#1E5981; color:white;" >
<center><table style="width: 80%;" align="center">
    <tr>
        <td>
        <p><b>Services</b><br>Order Management<br>Employee Management<br>Stock Management<br>Finance Management</p>
        </td>
        <td>
        <p><b>Contact Us</b><br>HotLine: +9411 2729568<br>Phone: +9411 2123789<br>E-mail: araispareparts@gmail.com <br>  
        </td>
        <td>
            <p>Follow Us On,</p>
            <div>
                <a href="https://www.facebook.com/" target="blank"><img class="social" title="facebook" src="/images/facebook.jpeg" alt="Facebook" width="30px"></a>
                <a href="https://www.instagram.com/" target="blank"><img class="social" title="instagram" src="/images/instagram.jpeg" alt="Instagram" width="30px"></a>
                <a href="https://www.twitter.com/" target="blank"><img class="social" title="twitter" src="/images/twitter.jpeg" alt="twitter" width="30px"></a>
            </div>
        </td>
    </tr>
</table></center>		

<hr width="100%">	
    
<p align="center">Copyright 2021 @ Arai(PVT)LTD.
    <br>All rights reserved
    <br>
</p>						
</footer>

</body>
</html>