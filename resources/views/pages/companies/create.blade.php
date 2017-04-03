@extends('layout')

@section('body-class', 'companies-create')

@section('content')
    <div class="content">
        <h1>Add company</h1>

        @include('components.companies.create-company')
    </div>
@endsection
