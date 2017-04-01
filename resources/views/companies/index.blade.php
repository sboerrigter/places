@extends('layout')

@section('content')
    <h1>Companies</h1>

    <ul>
        @foreach ($companies as $company)
            <li class="company">
                <a href="/companies/{{ $company->id }}">
                    {{ $company->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
