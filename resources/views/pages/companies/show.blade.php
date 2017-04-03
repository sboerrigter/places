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
            <h2>Reviews</h2>
            @foreach ($company->reviews as $review)
                @include('components.reviews.review')
            @endforeach
        </div>

        @include('components.reviews.create-review')

        <p>
            <a href="/companies/">
                Back to the overview
            </a>
        </p>
    </div>
@endsection
