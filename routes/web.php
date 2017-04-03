<?php

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/companies', 'CompaniesController@index');
Route::post('/companies', 'CompaniesController@store');
Route::get('/companies/create', 'CompaniesController@create');
Route::get('/companies/{company}', 'CompaniesController@show');
Route::post('/companies/{company}/reviews', 'ReviewsController@store');
