@extends('layout')

@section('body-class', 'companies-show')

@section('content')
    <div class="content">
        <h1>
            {{ $company->name }}
        </h1>

        <p>
            {{ $company->address }}
        </p>

        <p>
            <a href="/companies/">
                Back to the overview
            </a>
        </p>
    </div>
@endsection
