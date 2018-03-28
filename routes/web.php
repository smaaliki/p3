<?php

Route::get('/', 'PageController@index');

Route::get('/calculators/systemUptime', 'CalculatorsController@System_Uptime_Calc');
Route::get('/calculators/sampleSize', 'CalculatorsController@Sample_Size_Calc');
Route::any('/calculators/{n?}', 'CalculatorsController@index');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

