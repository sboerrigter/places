<?php

use App\Company;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/companies', function () {
    $companies = Company::all();

    return view('companies.index', compact('companies'));
});

Route::get('/companies/{company}', function ($id) {
    $company = Company::find($id);

    return view('companies.details', compact('company'));
});
