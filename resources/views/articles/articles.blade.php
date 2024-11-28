@extends('layouts.master')

@section('title')
Articles
@endsection

@section('content')
<h2 class="text-4xl font-extrabold dark:text-white">Articles</h2>
<div class="flex gap-6 flex-wrap justify-center m-6">
    @each('partials.article',$articles,'article','partials.no-articles')
</div>

{{--Syntaxe Foreach--}}

{{-- @if ($articles)
    @foreach ($articles as $article )

        <p> {{$article['title']}} </p>
        <p> {{$article['body']}} </p>

    @endforeach
@else
    @include('partials.no-articles')
@endif --}}


{{--Syntaxe Unless--}}

{{-- @unless(! $articles)
    @foreach ($articles as $article)
        @include('partials.article')
    @endforeach
@endunless --}}


{{--Syntaxe Forelse--}}

{{-- @forelse($articles as $article)
    <p> {{$article['title']}} </p>
    <p> {{$article['body']}} </p>
@empty
    @include('partials.article')
@endforelse --}}



{{--Syntaxe Each--}}


@endsection