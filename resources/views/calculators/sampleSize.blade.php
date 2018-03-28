@extends('layouts.master')

@section('title')
    Sample Size Calculator
@endsection

@section('content')
<h1>Contact Center Calculators >> Sample Size</h1>

<form method='GET' action='/calculators/sampleSize'>
    <fieldset>
        <!--<legend class='calcTitle'>Sample Size</legend>-->

        <label for='numCalls'>Number of Contacts
            <input type='text' id='numCalls' name='numCalls' value='{{ $numCalls }}'>
        </label>
        <br>

        <label for='confLevel'>Confidence Level<br>
            <input type='radio' name='confLevel' value='1' {{ ($confLevel == 1) ? 'CHECKED' : ''}}> 80%
            <input type='radio' name='confLevel' value='2' {{ ($confLevel == 2) ? 'CHECKED' : ''}}> 85%
            <input type='radio' name='confLevel' value='3' {{ ($confLevel == 3) ? 'CHECKED' : ''}}> 90%
            <input type='radio' name='confLevel' value='4' {{ ($confLevel == 4) ? 'CHECKED' : ''}}> 95%
            <input type='radio' name='confLevel' value='5' {{ ($confLevel == 5) ? 'CHECKED' : ''}}> 99%
        </label>
        <br>
        <label for='errorMargin'>Margin of Error (%)
            <input type='text' id='errorMargin' name='errorMargin' value='{{ $errorMargin }}'>
        <br>

        <input class='button' type='submit' value='Submit'/>
    </fieldset>
</form>

@if ($sampleSize)
<p class='outMessage'>For a contact volume of {{ $numCalls }}, your survey sample size should be {{ $sampleSize }}.</p>
@endif
@endsection