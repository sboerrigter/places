<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Companies - Places</title>
    </head>
    <body>
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
    </body>
</html>
