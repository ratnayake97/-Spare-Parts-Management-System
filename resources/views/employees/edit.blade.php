@extends('empLayouts.app')
@section('content')
<html>
<head> <link rel="stylesheet" href="css/styles.css">

<style>
    
</style>
</head>
<body  ><br><br>
<h2 style=" color: #b3b3ff;text-align:center; padding:7px;  background-color:whitesmoke; box-shadow:4px 4px 5px  #b3b3ff; width:50%" >Update  Details</h3>
<br><br>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<style>
    .input{
    background-color: whitesmoke;
    box-shadow: 2px 2px  #b3b3ff;
    border: whitesmoke;
    width: 75%;
    height: 40px;
    padding-left: 40px;
   
}
.input1{
    background-color: 	 #b3e6ff;
    box-shadow: 2px 2px  #b3b3ff;
    border: whitesmoke;
    width: 75%;
    height: 40px;
    padding-left: 40px;
   
}
</style>

<form action="{{ route('employees.update', $employee->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')


    <br>
    <input class="input1" type="text" name="empid" placeholder="Employee ID" value="{{ $employee->empid }}"require disabled/><br><br>
    
    <input class="input" type="text" name="name"  placeholder="Employee Name" value="{{ $employee->name }}"/><br><br>
    
    <input class="input"type="text" name="contact_no"  placeholder="Contact number" value="{{ $employee->contact_no }}"/><br><br>
    
    <input class="input"type="text" name="email"  placeholder="Email" value="{{ $employee->email}}"/><br><br>

    <input class="input"type="text" name="designation"  placeholder="Designation" value="{{ $employee->designation }}"/><br><br>
    
    <input class="input"type="text" name="address"  placeholder="Address" value="{{ $employee->address }}"/><br><br>
    <br>
       
    @if($employee->empid)
    <img id="original" src="{{asset('/empimages/'.$employee->image)}}"
    height="70" width="70">
    @endif
    <h6 class="name">Profile picture:</h6>
    <input class="company" type="file" name="image"><br>
    
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn  btn-lg " type="submit" style=" float:left; width:50%; background-color: #006080; color:white">Update Details</button>
    </div>
</form>



@endsection