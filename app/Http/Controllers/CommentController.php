<?php

namespace App\Http\Controllers;

use App\Article;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Article $article)
    {
        $this->validate(request() , [
            'body' => 'required|min:5'
        ]);

        $article->comments()->create([
            'user_id' => auth()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
