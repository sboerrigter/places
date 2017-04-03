@extends('layout')

@section('content')
    <div class="content">
        <h1>Register</h1>

        @include('components.errors')

        <form class="register form" method="POST" action="/register">
            {{ csrf_field() }}

            <p class="form__field">
                <label for="name">
                    Name
                </label>
                <input type="text" name="name">
            </p>

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

            <p class="form__password">
                <label for="password_confirmation">
                    Confirm password
                </label>
                <input type="password" name="password_confirmation">
            </p>

            <p class="form__submit">
                <button type="submit">
                    Register
                </button>
            </p>
        </form>

    </div>
@endsection
