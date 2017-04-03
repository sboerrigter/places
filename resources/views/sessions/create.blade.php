@extends('layout')

@section('content')
    <div class="content">
        <h1>Login</h1>

        @include('components.errors')

        <form class="login form" method="POST" action="/login">
            {{ csrf_field() }}

            <p class="form__email">
                <label for="email">
                    Email
                </label>
                <input type="email" name="email">
            </p>

            <p class="form__password">
                <label for="password">
                    Password
                </label>
                <input type="password" name="password">
            </p>

            <p class="form__submit">
                <button type="submit">
                    Login
                </button>
            </p>
        </form>

    </div>
@endsection
