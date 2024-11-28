<!-- <article>
<a href="/article/{{ $article->id }}"> {{$article->title}} </a>
<p> {{$article['body']}} </p>
</article> -->

<article>
    <h3>{{ $article->title}}</h3>
    <a href="/article/{{ $article->id }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
        Lire l'article
    </a>
    <p>Article écrit par : 
    <span class="font-bold">{{ $article->user->name }}</span>    
    </p>
</article>