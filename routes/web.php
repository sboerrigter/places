<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/companies', function () {
    $companies = DB::table('companies')->get();

    return view('companies.index', compact('companies'));
});

Route::get('/companies/{company}', function ($id) {
    $company = DB::table('companies')->find($id);

    return view('companies.details', compact('company'));
});
