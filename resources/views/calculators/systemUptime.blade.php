@extends('layouts.master')

@section('title')
    System Uptime Calculator
@endsection

@section('content')
<h1>Contact Center Calculators >> System Uptime</h1>

<p>This form is not yet ready for showtime!!</p>
<form method='GET' action='/calculators/systemUptime'>
    <fieldset>
        <label for='month'>Select Month and Year:
            <select name='month' id='month'>
                <option value='1'>Jan</option>
                <option value='2'>Feb</option>
                <option value='3'>Mar</option>
                <option value='4'>Apr</option>
                <option value='5'>May</option>
                <option value='6'>Jun</option>
                <option value='7'>Jul</option>
                <option value='8'>Aug</option>
                <option value='9'>Sep</option>
                <option value='10'>Oct</option>
                <option value='11'>Nov</option>
                <option value='12'>Dec</option>
            </select>
        </label>
        <label>
            <select name='year'>
                <option value='2017'>2017</option>
                <option value='2018'>2018</option>
            </select>
        </label>
        <br>
        <!-- Todo: disable the following inputs if it is a 24/7 operation -->
        <label> Check if you have a 24/7 Operation
            <input type='checkbox'
                   name='fullOperation'
                   id='fullOperation'
                   value='1'
            >
        </label>
        <br>

        <label for='weekDayHours'>Work Hours per Week Day:
            <input type='range'
                   id='weekDayHours'
                   name='weekDayHours'
                   min='6'
                   value=''
                   max='24'
                   step='1'
                   onchange="weekDayHoursOutput.value = this.value;">
        </label>

        <output id='weekDayHoursOutput'></output>
        <br>

        <label for='weekendWorkHours'>Work Hours per Weekend Day:
            <input type='range'
                   id='weekendWorkHours'
                   name='weekendWorkHours'
                   min='6'
                   value=''
                   max='24'
                   step='1'
                   onchange="weekendWorkHoursOutput.value = this.value;">
        </label>
        <output id="weekendWorkHoursOutput"></output>
        <br>
        <!-- Todo: Figure out how to set the correct checked state based on wha teh user submitted-->
        <p id='weekDays'>Select below the days of the week that your contact center is open for business:<br/>
            <input type='checkbox' id='sunday' name='workDays[]' value='sunday' checked> Sunday
            <input type='checkbox' id='monday' name='workDays[]' value='monday' checked> Monday
            <input type='checkbox' id='tuesday' name='workDays[]' value='tuesday' checked> Tuesday
            <input type='checkbox' id='wednesday' name='workDays[]' value='wednesday' checked> Wednesday
            <input type='checkbox' id='thursday' name='workDays[]' value='thursday' checked> Thursday
            <input type='checkbox' id='friday' name='workDays[]' value='friday'> Friday
            <input type='checkbox' id='saturday' name='workDays[]' value='saturday'> Saturday
        </p>

        <label for='downTime'>System Shutdown Time (hrs):
            <input type='text' id='downTime' name='downTime' value=''>
        </label>
        <br>
        <br>
        <input class='button' type='submit' value='Submit'/>
    </fieldset>
</form>

@endsection