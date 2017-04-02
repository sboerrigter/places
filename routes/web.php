<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/companies', 'CompaniesController@index');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/create', 'CompaniesController@create');
Route::get('/companies/{company}', 'CompaniesController@show');
