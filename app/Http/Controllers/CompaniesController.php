<?php

namespace App\Http\Controllers;

use App\Company;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $companies = Company::all();

        return view('pages.companies.index', compact('companies'));
    }

    public function show(Company $company)
    {
        return view('pages.companies.show', compact('company'));
    }

    public function create()
    {
        return view('pages.companies.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name'    => 'required',
            'address' => 'required',
        ]);

        auth()->user()->publish(
            new Company(request(['name', 'address']))
        );

        return back();
    }
}
