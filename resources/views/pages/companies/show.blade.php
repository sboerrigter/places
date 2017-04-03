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

        <div class="reviews">
            @foreach ($company->reviews as $review)
                @include('components.review')
            @endforeach
        </div>

        <p>
            <a href="/companies/">
                Back to the overview
            </a>
        </p>
    </div>
@endsection
