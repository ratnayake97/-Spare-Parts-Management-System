@extends('empLayouts.app')
@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <!-- Font Awesome -->
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet"/>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="css/styles.css">

    <style>

        #design{
            background-color:rgb(0, 0, 0, 0.5);
            width: 300px;
            height: 500px;
            padding: 50px;
           align-items: center;
           margin: 70px;
            border-radius: 20px;
        }

        .btn{
            width: 200px;
            height: 50px;
            color: navy;
        }
        .btn1{
            background-color: white;
        }
        .btn2{
            background-color: white;
        }
        .btn3{
            background-color:	 white;
        }


       
        .img{
            margin-top: 0%;
        }
    

            * {
            box-sizing: border-box;
            }
            .column {
            float: left;
            width: 33.33%;
            padding: 5px;
            }

            /* Clearfix (clear floats) */
            .row::after {
            content: "";
            clear: both;
            display: table;
            }
            a:link{
                text-decoration: none;
            }
            .a{
                color: navy;
                
            }
            body {
                background-image: url("/images/bg36.jpg");
                background-position: center;
                background-size: cover;
            
            }



    </style>
    
    
</head>

<body>
   




<br><br>

<h1 style="text-align: center; color:whitesmoke; text-shadow: 4px 4px 5px #8c8c8c; font-size: 50px;">Employee Management</h1>

<div class="row">
    <div class="column">
        <div id="design">
        <img src="images/img1.jpg" alt="Employee1" width="180px" height="200px" class="img"><br><br><br>
        <button class="btn btn1"><a href="/employees/create" class="a"><b>Add Employee</b></a></button><br><br>
        <p style="text-align:center; color:whitesmoke;"><b>Click the button to add the relevant information of the newly recruited employees here</b></p>
        </div>
    </div>

    <div class="column">
        <div id="design">
        <img src="images/img2.jpg" alt="Employee2" width="180px" height="200px" class="img"><br><br><br>
        <button class="btn btn2"><a href="/employees" class="a"><b>View Employee</b></a></button><br><br>
        <p style="text-align:center; color:whitesmoke;"><b>Click the button to check all the imployee information</b></p>
        </div>
    </div>

    <div class="column">
        <div id="design">
        <img src="images/img3.jpg" alt="Employee3" width="180px" height="200px" class="img"><br><br><br>
        <button class="btn btn3"><a href="/attendence/create" class="a"><b>Working details</b></a></button><br><br>
        <p style="text-align:center;color:whitesmoke;"><b>Click the button to add the relevant attendence details of the employees and calculate salary</b></p>
        </div>
     </div>
</div>

<br><br>






</body>
</html>
@endsection