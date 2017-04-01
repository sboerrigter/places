<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/companies', 'CompaniesController@index');
Route::get('/companies/{company}', 'CompaniesController@show');
