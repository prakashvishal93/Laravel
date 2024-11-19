<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        $article = new Article();
        $article->title = $request->input('title');
        $article->author = $request->input('author');
        $article->body = $request->input('body');

        if ($article->save()) {
            return redirect('/write-article')->with('success', 'Article has been saved successfully!');
        } else {
            return redirect('/write-article')->with('error', 'Failed to save the article.');
        }
    }

    public function showArticles()
    {
        $articles = Article::all();

        return view('read', compact('articles'));
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect('/read-articles')->with('success', 'Article deleted successfully!');
    }
}
