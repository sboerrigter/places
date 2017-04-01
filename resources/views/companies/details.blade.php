<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $company->name }} - Places</title>
    </head>
    <body>
        <h1>{{ $company->name }}</h1>
        <p>{{ $company->address }}</p>

        <p>
            <a href="/companies/">
                Back to the overview
            </a>
        </p>
    </body>
</html>
