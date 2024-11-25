<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>
    <h1>Laravel 101</h1>
    <nav>
        <ul>
            <li><a href="/contact-us">Contactez-nous</a>
                @yield('content')
            </li>

            <li>
                <a href="/about-us">A propos de nous</a>
                @yield('about')
            </li>
        </ul>
    </nav>

</body>

</html>