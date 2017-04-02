@extends('layout')

@section('content')
    <h1>Companies</h1>

    <ul>
        @foreach ($companies as $company)
            @include('companies.company')
        @endforeach
    </ul>
@endsection
