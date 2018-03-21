<?php

Route::get('/', 'PageController@index');

Route::get('/about', 'PageController@about');

Route::any('/calculators/{n?}', 'CalculatorsController@index');