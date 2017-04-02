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

    public function create()
    {
        return view('companies.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title'   => 'required',
            'address' => 'required',
        ]);

        Company::create(request(['name', 'address']));

        return redirect('/companies');
    }
}
