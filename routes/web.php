<?php

Route::get('/', 'PageController@index');

Route::get('/calculators/Sample_Size_Calc', 'CalculatorsController@Sample_Size_Calc');
Route::get('calculators/sampleSize', 'CalculatorsController@sampleSize');

Route::get('/calculators/System_Uptime_Calc', 'CalculatorsController@System_Uptime_Calc');
Route::get('/calculators/systemUptime', 'CalculatorsController@systemUptime');

Route::any('/calculators', 'CalculatorsController@index');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');