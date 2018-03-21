@extends('layouts.master')

@section('title')
    CC Calculators
@endsection

@section('content')
<h1>Contact Center Calculators</h1>

<form id='systemUpTimeForm' method='get' action=''>
    <fieldset>
        <legend class='calcTitle'>Sample Size</legend>

        <label for='numCalls'>Number of Contacts
            <input type='text' id='numCalls' name='numCalls' >  <!--do we need sanitize here?-->
        </label>
        <br>

        <p>Confidence Level<br>
            <input type='radio' name='confLevel' value='1'> 80%
            <input type='radio' name='confLevel' value='2'> 85%
            <input type='radio' name='confLevel' value='3'> 90%
            <input type='radio' name='confLevel' value='4'> 95%
            <input type='radio' name='confLevel' value='5'> 99%
        </p>

        <label for='errorMargin'>Margin of Error (%)
            <input type='text' id='errorMargin' name='errorMargin' > <!--do we need sanitize here?-->
        </label>
        <br>

        <input class='button' type='submit' value='Submit'/>
    </fieldset>
</form>

@endsection