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
    @include('partials.no-articles')
@endif -->


{{--Syntaxe Unless--}}

<!-- Syntaxe -->
<!-- @unless(! $articles)
    @foreach ($articles as $article)
        @include('partials.article')
    @endforeach
@endunless -->


{{--Syntaxe Forelse--}}

<!-- @forelse($articles as $article)
    <p> {{$article['title']}} </p>
    <p> {{$article['body']}} </p>
@empty
    @include('partials.article')
@endforelse -->


{{--Syntaxe Each--}}

@each('partials.article',$articles,'article','partials.no-articles')

@endsection