@extends('empLayouts.app')

@section('content')

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Baloo' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="stylesheet" href="css/styles.css">
         
         <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    
        <style>
             a{
             color: whitesmoke;
             font-family: sans-serif;
         }
         a:link{
             text-decoration: none;
         }a:hover{
             color:	 #80ffff;
         }
        </style>
        </head>

       

       
    <body style="background: linear-gradient(to left, #ccccff 0%, #ffffff 100%) ;">
   
    </body>
</html>
<br>
<h2 style=" color: #b3b3ff;text-align:center; padding:7px; width:50%; background-color:whitesmoke; box-shadow:4px 4px 5px  #b3b3ff">Employee  Details</h3>




{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-warning">
        {{ session('success') }}
    </div>
@endif
<div class="event__search__floater" style="float: right;">
    <form action="" class="d-flex" style="margin: -15px;">
        <div class="form-group">
           
            <input type="search" name="search" id="" class="form-control me-2" placeholder="Search by name or id" value="{{$search}}" style="margin: 3px;">
            
        </div>
        <button class="btn" style="margin: 5px; background-color:navy; border: #66b3ff; color:white">Search</b></button>
        <a href="{{route('employees.index')}}">
            <button class="btn btn-primary" type="button"style="margin: 5px; background-color:#99ccff; color:white; border:#99ccff;" >Reset</b></button>
        </a>
    </form>
</div><br><br><br>

       
       

<table class="table table-striped table-hover" id="employee">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col"><b>Index</th>
            <th scope="col"><b>Image</th>
            <th scope="col"><b>Employee ID</th>
            <th scope="col"><b>Employee Name</th>
            <th scope="col"><b>Contact number</th>
            <th scope="col"><b>Email</th>
            <th scope="col"><b>Designation</th>
            <th scope="col"><b>Address</th>
            <th scope="col"><b>Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($employee as $employee) {{-- Loop attendence --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td><img src="{{asset('empimages/'.$employee->image)}}" 
              style="width: 75px;height:70px;  border-radius: 50%;"></td>

            
            <td>{{ $employee->empid }}</td>
            <td>{{ $employee->name }}</td>
            <td> {{ $employee->contact_no }}</td>
            <td>{{ $employee->email }}</td>
            <td>{{ $employee->designation }}</td>
            <td>{{ $employee->address }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn  btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false" style="background-color: #005580; color:white">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('employees.show', $employee->id) }}">Profile</a></li> {{-- View --}}
                      <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('employees.destroy', $employee->id) }}" method="post"> {{-- Delete --}}
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
   
@endsection