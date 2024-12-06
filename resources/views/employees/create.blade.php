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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/empStyle.css">
   
</head>

<body>
    <br><br><div class="regform">
        <h2>Employee Registration</h2>
    </div>
    <div class="main">
    <form action="{{ route('employees.store') }}" method="post" class="form" enctype="multipart/form-data">
    @csrf
        
            <div id="name">
                <h2 class="name">Employee ID :</h2><input class="firstname" type="text" name="empid">
                <label class="lastlabel"></label></div>

            <h2 class="name">Employee name :</h2>
            <input class="company" type="text" name="name">

            <h2 class="name">Contact number :</h2>
            <input class="company" type="text" name="contact_no">

            <h2 class="name">Email:</h2>
            <input class="company" type="text" name="email">

            <h2 class="name">Designation:</h2>
            <input class="company" type="text" name="designation">

            <h2 class="name">Address:</h2>
            <input class="company" type="text" name="address">

            <h2 class="name">Profile picture:</h2>
            <input class="company" type="file" name="image" style="background-color: rgb(0,0,0,0.3);color:whitesmoke">

            
            <button class="button" type="submit">Save Details</button>
        </form>
    </div>
</body>

</html>

@endsection







