@extends('layout.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="css/styles.css">
         <link rel="stylesheet" href="css/form.css">
         <style>.btn1{
             color: whitesmoke;
             width:300px;
             border-radius: 5px;
             text-decoration: none;
             margin-left: 400px;
             font-size: 25px;
             height: 50px;
             background-color:  #0086b3;
         }a{
             color: whitesmoke;
             font-family: sans-serif;
         }
         a:link{
             text-decoration: none;
         }a:hover{
             color:	 #80ffff;
         }
         .main {
    background-color: rgb(0, 0, 0, 0.5);
    width: 800px;
    margin: auto;}
    </style>
    </head>

       

       
    <body style="background: linear-gradient(to left, #ccccff 0%, #ffffff 100%) ;">
   
    </body>
</html>
<br>
<h2 style=" color: #b3b3ff;text-align:center; padding:7px; width:50%; background-color:whitesmoke; box-shadow:4px 4px 5px  #b3b3ff">Working  Details</h3>


{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="event__search__floater" style="float: right;">
    <form action="" class="d-flex" style="margin: -15px;">
        <div class="form-group">
           
            <input type="search" name="search" id="" class="form-control me-2" placeholder="Search by name or id" value="{{$search}}" style="margin: 3px;">
            
        </div>
        <button class="btn" style="margin: 5px; background-color:navy; border: #66b3ff; color:white">Search</b></button>
        <a href="{{route('attendence.index')}}">
            <button class="btn btn-primary" type="button"style="margin: 5px; background-color:#99ccff; color:white; border:#99ccff;" >Reset</b></button>
        </a>
    </form>
</div><br><br><br>

<table class="table table-striped table-hover" id="customers" >
    <thead>
        <tr></tr>
        <tr>
            <th scope="col"><b>Index</th>
            <th scope="col"><b>Employee ID</th>
            <th scope="col"><b>Employee Name</th>
            <th scope="col"><b>Day type</th>
            <th scope="col"><b>Worked days</th>
            <th scope="col"><b>Worked hours</th>
            <th scope="col"><b>Salary</th>
            <th scope="col"><b>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($attendence as $attendence) {{-- Loop attendence --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $attendence->empid }}</td>
            <td>{{ $attendence->name }}</td>
            <td>{{ $attendence->daytype }}</td>
            <td>{{ $attendence->days }}</td>
            <td>{{ $attendence->hours }}</td>
            <td>Rs.{{ $attendence->salary }}</td>
            
              <td>
                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('attendence.show', $attendence->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('attendence.edit', $attendence->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('attendence.destroy', $attendence->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
<br>

     

@endsection