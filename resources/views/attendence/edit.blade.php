@extends('layout.app')

@section('content')
<br>
<h2 style=" color:#ccccb3;text-align:center; width:50%; padding:7px;  background-color:whitesmoke; box-shadow:4px 4px 5px  #b3b3ff">Update  Attendence</h3>
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
<style>.input{
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

<form action="{{ route('attendence.update', $attendence->id) }}" method="post">
    @csrf
    @method('put')
    <input class="input1" type="text" name="empid"  placeholder="Employee id" value="{{ $attendence->empid }}"required disabled/><br><br>

    <input class="input" type="text" name="name" placeholder="Employee Name" value="{{ $attendence->name }}"/><br><br>
        
    <input class="input" type="text" name="daytype"  placeholder="Day type" value="{{ $attendence->daytype }}"/><br><br>

    <input class="input" type="number" name="days"  placeholder="Worked days per month" value="{{ $attendence->days }}"/><br><br>

    <input class="input" type="number" name="hours"  placeholder="Worked hours per day" value="{{ $attendence->hours }}"/><br><br>

    
    
    <button class="btn btn-primary" type="submit" style="width: 200px;">Save Changes</button>
</form>

@endsection