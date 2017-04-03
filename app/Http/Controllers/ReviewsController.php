<?php

namespace App\Http\Controllers;

use App\Company;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function store(Company $company)
    {
        $this->validate(request(), [
            'body'   => 'required',
            'rating' => 'required',
        ]);

        $company->addReview(request(['body', 'rating']));

        return back();
    }
}
