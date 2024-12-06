@extends('layout.app')

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
    <title>Document</title>

    <link rel="stylesheet" href="/css/form.css">
    <style></style>
</head>

<body>
    <br><br><div class="regform">
        <h3>Attendence</h3>
    </div>
    <div class="main">
    <form action="{{ route('attendence.store') }}" method="post" class="form">
    @csrf
<br>
            <div id="name">
                <h2 class="name">Employee ID </h2><input class="firstname" type="text" name="empid">
                <label class="lastlabel"></label></div>

            <h2 class="name">Employee name </h2>
            <input class="company" type="text" name="name">

            <h2 class="name">Day type</h2>
            <select class="option" name="daytype">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Full day</option>
                <option>Half day</option>
                
            </select>

            <h2 class="name">Working days per month</h2>
            <input class="Code" type="text" name="days">

            <h2 class="name">Working hours per day</h2>
            <input class="Code" type="text" name="hours">

          

            
            
            <button class="button" type="submit">Save Details</button>
        </form>
    </div>
</body>

</html>

@endsection
