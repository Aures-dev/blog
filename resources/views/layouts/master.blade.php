<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <h1>Laravel 101</h1>

    <a href="/contact-us" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        Contactez-nous
    </a>
    
    <a href="/about-us" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        A propos de nous
    </a>
    
    <a href="/articles" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        Articles
    </a>

    <a href="/article-form" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        Articles-Formulaire
    </a>
    
    @yield('content')
</body>

</html>