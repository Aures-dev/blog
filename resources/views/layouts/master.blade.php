<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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

    @auth
        @can('see-admin-menu')
            <a href="/article-form" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                Ajoutez un article
            </a>
        @endcan

        <a href="{{ route('profile') }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            Votre profil</a>

        <form action="{{ route('logout') }}" method="POST"
            class="font-medium text-red-600 dark:text-red-500 hover:underline">
            @csrf
            <input type="submit" value="Se déconnecter">
        </form>
    @endauth

    {{--Pour l'utilisateur non auth--}}
    @guest
        <a href=" {{route('login')}} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            Se connecter
        </a>

        <a href=" {{route('register')}} " class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
            S'inscrire
        </a>
    @endguest


    @include('messages.allMessages')

    @yield('content')
</body>

</html>