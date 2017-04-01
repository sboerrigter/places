@extends('layout')

@section('content')
    <h1>{{ $company->name }}</h1>
    <p>{{ $company->address }}</p>

    <p>
        <a href="/companies/">
            Back to the overview
        </a>
    </p>
@endsection
