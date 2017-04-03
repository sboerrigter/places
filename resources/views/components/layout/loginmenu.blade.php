<nav class="loginmenu">
    @if (Auth::check())
        <span class="loginmenu__username">
            Welcome {{ auth()->user()->name }}
        </span>
        <a class="mainmenu__logout" href="/logout">
            Logout
        </a>
    @else
        <a class="mainmenu__login" href="/login">
            Login
        </a>

        <a class="mainmenu__register" href="/register">
            Login
        </a>
    @endif
</nav>
