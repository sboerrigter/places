<?php

namespace App\Http\Controllers;

use App\Company;

class CompaniesController extends Controller
{
    public function index()
    {
        $companies = Company::all();

        return view('companies.index', compact('companies'));
    }

    public function show(Company $company)
    {
        return view('companies.show', compact('company'));
    }
}
