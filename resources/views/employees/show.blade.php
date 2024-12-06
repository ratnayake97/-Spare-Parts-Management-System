@extends('empLayouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Student Profile Page Design Example</title>

    <meta name="author" content="Codeconvey" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>

    <!--Only for demo purpose - no need to add.-->
    <link rel="stylesheet" href="css/demo.css" />
    
	    <link rel="stylesheet" href="css/style.css">
     <style>body {
     background: linear-gradient(to bottom right, #6666ff 0%, #ffffff 100%);
}button{
  width: auto;
  background-color:#80aaff ;
  float:right;  
  font-family:sans-serif;
  color: whitesmoke;
}</style>
</head>
<body>
		
<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            
        </div>
    </div>
</div>
<br><br>
<header class="ScriptHeader">
    <div class="rt-container">
    	<div class="col-rt-12">
        	<div class="rt-heading">
            	<h1 style="color: whitesmoke;">{{$employees->name}} Profile</h1>
                <p></p>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
              
<!-- Employee Profile -->
<div class="" style="border-radius: 20%;" >
  <div class="container" >
    <div class="row" >
      <div class="col-lg-4" >
        <div class="" style="border-radius: 5%; width:350px; height:400px; background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
          <div class="card-header bg-transparent text-center"><br>

          <form action="{{ route('employees.update', $employees->id) }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('put')
          @if($employees->empid)
    <img id="original" src="{{asset('/empimages/'.$employees->image)}}"
    height="150" width="150" style="border-radius: 50%;">
    @endif
    <h6 class="name">Profile picture:</h6>
    <center><input class="company" type="file" name="image" style="margin-left:40px;"></center><br>
    
    
          </div>
          <div class="card-body" style="text-align: center;">
         
          <h3>{{ $employees->name }}</h3><h6>Employee id : {{ $employees->empid }}</h6><br>
    
    
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="" style="border-radius: 10px;background-color:white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); ">
          <div class="card-header bg-transparent border-0"><br>
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0">
            <table class="table table-bordered">
              <tr>
                <th width="30%"><b>Name</b></th>
                <td width="2%">:</td>
                <td> <input class="input" type="text" name="name"  placeholder="Employee Name" value="{{ $employees->name }}"/><br><br>
    </td>
              </tr>
              <tr>
                <th width="30%"><b>Contact number</b>	</th>
                <td width="2%">:</td>
                <td> 
    <input class="input"type="text" name="contact_no"  placeholder="Contact number" value="{{ $employees->contact_no }}"/>
    </td>
              </tr>
              <tr>
                <th width="30%"><b>Email</b></th>
                <td width="2%">:</td>
                <td>  <input class="input"type="text" name="email"  placeholder="Email" value="{{ $employees->email}}"/>
</td>
              </tr>
              <tr>
                <th width="30%"><b>Designation</b></th>
                <td width="2%">:</td>
                <td> <input class="input"type="text" name="designation"  placeholder="Designation" value="{{ $employees->designation }}"/>
                 </td>
              </tr>
              <tr>
                <th width="30%"><b>Address</b></th>
                <td width="2%">:</td>
                <td>   <input class="input"type="text" name="address"  placeholder="Address" value="{{ $employees->address }}" style="height: auto; width:auto;"/>
    
</td>
              </tr>
            
            </table>
            <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn   " type="submit" style=" float:right; width:auto; font-family:sans-serif;background-color:#80aaff; ">Save Changes</button>
    </div>
          </div>
        </div>
          <div style="height: 26px"></div>
       
      </div>
    </div>
  </div>
</div>
<!-- partial -->
           
    		</div>
		</div>
    </div>
</section>
     


    <!-- Analytics -->

	</body>
</html>
@endsection