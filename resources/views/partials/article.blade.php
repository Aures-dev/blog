<!-- <article>
<a href="/article/{{ $article->id }}"> {{$article->title}} </a>
<p> {{$article['body']}} </p>
</article> -->

<article>
    <h3>{{ $article->title}}</h3>
    <a href="/article/{{ $article->id }}">
        Lire l'article
    </a>
    <p>Article écrit par : {{ $article->user->name }} </p>
</article>