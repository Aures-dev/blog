@extends('layouts.master')

@section('title')
Articles
@endsection

@section('content')

<h2>Articles</h2>

{{--Syntaxe Foreach--}}

<!-- @if ($articles)
    @foreach ($articles as $article )

        <p> {{$article['title']}} </p>
        <p> {{$article['body']}} </p>

    @endforeach
@else
    @include('articles.index')
@endif -->


{{--Syntaxe Unless--}}

<!-- Syntaxe nécéssitant le répertoire resources/views/articles/ avec le fichier index.blade.php -->
<!-- @unless(! $articles)
    @foreach ($articles as $article)
        @include('articles.index')
    @endforeach
@endunless -->


{{--Syntaxe Forelse--}}

<!-- @forelse($articles as $article)
    <p> {{$article['title']}} </p>
    <p> {{$article['body']}} </p>
@empty
    @include('articles.index')
@endforelse -->


{{--Syntaxe Each--}}

@each('articles.index',$articles,'article','articles.no-articles')

@endsection