@extends('layout')

@section('body-class', 'companies-index')

@section('content')
    <div class="content">
        <h1>Companies</h1>

        <ul>
            @foreach ($companies as $company)
                @include('components.companies.company')
            @endforeach
        </ul>
    </div>
@endsection
