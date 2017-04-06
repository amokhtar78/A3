{{-- /resources/views/bmi/input.blade.php --}}
@extends('layouts.master')

@section('title')
BMI Calculator
@endsection

@section('content')
<h1>Body Mass Index <br>Calculator</h1>

<form method='GET' action='/input'>

    <label for='weight'>Please input your weight:</label>
    <input type='text' name='weight' id='weight' value='{{ $weight or '' }}'>
    <br>
    <label for='height'>Please input your height:</label>
    <input type='text' name='height' id='height' value='{{ $height or '' }}'>
    <br>
    <label for='date'>Date of Birth</label>
    <input type='date' name='date' id="date">
    <br>
    <label for='gender'>Select your gender:</label>
    <input type="radio" name="gender"
    <?php if (isset($gender) && $gender == "female") echo "checked"; ?>
           value="female">Female
    <input type="radio" name="gender" id ="gender"
    <?php if (isset($gender) && $gender == "male") echo "checked"; ?>
           value="male">Male
    <br>
    <input type='submit' class='btn btn-primary btn-small'>
</form>

@if(count($errors) > 0)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@if($weight != null)
<h2>
    User is <em>{{ $userAge }} years old
        <br>
        @if ($gender == "female") Her
        @else His
        @endif
        Body Mass is: <em>{{ $userBmi }}</em> kg/m2
</h2>

@endif
@endsection

