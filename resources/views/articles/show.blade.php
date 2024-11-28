@extends('layouts.master')

@section('title')
Article
@endsection

@section('content')

<article>
    <div class="my-4 ">
        <a href="/article/{{ $article->id }}/edit"
            class="font-medium text-green-600 dark:text-green-500 hover:underline">
            Éditer l'article
        </a>
        <form action="/article/{{ $article->id }}/delete" method="POST" class="m-0">
            @csrf
            @method('DELETE')
            <button type="submit"
            class="font-medium text-red-600 dark:text-red-500 hover:underline">
                Effacer l'article
            </button>
        </form>
    </div>

    <p> {{$article->body}} </p>


    @foreach($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
    @endforeach

</article>


@endsection
