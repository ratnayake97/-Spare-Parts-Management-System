@extends('layout.app')

@section('content')
<br>
    
    <hr/>


    <div class="card">
  <h5 class="card-header" style="background-color: navy; color:whitesmoke;">{{ $attendence->name }}'s Profile</h5>
  <div class="card-body">
  <div class="bg-success p-2 text-dark bg-opacity-10 text-dark rounded p-3">
    
        <h5 style="color: #3366cc;">ID</h5>
        <p class="fw-bold">{{ $attendence->empid }}</p>
  
        <h5 style="color: #3366cc;">Name</h5>
        <p class="fw-bold">{{ $attendence->name }}</p>

        <h5 style="color: #3366cc;">Day type</h5>
        <p class="fw-bold">{{ $attendence->daytype }}</p>

        <h5 style="color: #3366cc;">Working days of this month</h5>
        <p class="fw-bold">{{ $attendence->days }}</p>
      
        <h5 style="color: #3366cc;">Working hours per day</h5>
        <p class="fw-bold">{{ $attendence->hours }}

        <h5 style="color: #3366cc;">Salary</h5>
        <p class="fw-bold">Rs.{{ $attendence->salary }}
        </div>

  </div>
</div><br><br>
  

@endsection