{{-- /resources/views/bmi/input.blade.php --}}
@extends('layouts.master')

@section('title')
BMI Calculator
@endsection

@section('nav')
<h3>(Metric Units)</h3>
BMI = weight(kg)/height2(m2)        

<h3>BMI range - kg/m2</h3>
<h4>Thin</h4>
less than 18.5<br>
<h4>Normal</h4>
from 18.5 to 25<br>
<h4>Overweight</h4>
from 25 to 30<br>
<h4>Obese</h4>
more than 30

@endsection

@section('content')
<h1>BMI Calculator</h1>

<form method='GET' action='/input'>

    <label for='weight'>(Required) Please input your weight in Kilo grams:</label>
    <input type='text' name='weight' id='weight' value='{{ $weight or '' }}'>
    <br>
    <label for='height'>(Required) Please input your height in meters:</label>
    <input type='text' name='height' id='height' value='{{ $height or '' }}'>
    <br>
    <label for='date'>(Required) Date of Birth</label>
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

