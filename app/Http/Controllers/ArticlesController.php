<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class ArticlesController extends Controller
{
    use AuthorizesRequests;
    public function index()
    {
        $articles = Article::with('user')->orderBy('created_at', 'desc')->get();

        return view('articles.articles', compact('articles'));
    }


    public function show($id)
    {
        $article = Article::with('user')->with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * afficher le formulaire d'édition d'un article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $this->authorize('create', Article::class);
        return view('articles.create');
    }

    /**
     * Enregistrer une ressource
     * @param \Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $this->authorize('create', Article::class);
        // vérification des permissions plus tard
        $user = User::find(1);
        $request['user_id'] = $user->id;

        $validatedData = $request->validate([
            '_token' => 'required|string',
            'title' => 'required|string',
            'body' => 'required|string',
            'user_id' => 'required|numeric|exists:users,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //dd($validatedData);

        Article::create($validatedData);
        return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);
    }


    //afficher le formulaire d'édition d'une ressource existante
    public function edit(Article $article)
    {
        $this->authorize('update', $article);
        return view('articles.edit', compact('article'));
    }

    // modification de données
    public function update(Request $request, Article $article)
    {
        // vérification des permissions
        $this->authorize('update', $article);

        // validation
        $article->update($request->all());
        return redirect('/articles');
    }

    //
    public function delete(Article $article)
    {
        // vérification des permissions
        $this->authorize('delete', $article);
        
        $article->delete();
        return redirect('/articles');
    }
}
