<nav class="loginmenu">
    @if (Auth::check())
        <span class="loginmenu__username">
            Welcome {{ auth()->user()->name }}
        </span>
        <a class="loginmenu__item" href="/logout">
            Logout
        </a>
    @else
        <a class="loginmenu__item" href="/login">
            Login
        </a>

        <a class="loginmenu__item" href="/register">
            Register
        </a>
    @endif
</nav>
