<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class IndexController extends Controller
{
    protected $header = 'Hello world!';
    protected $message = 'Here will be some text';

    function __construct()
    {
        $this->header;
        $this->message;
    }

    public function index()
    {

        $articles = Article::get(['id', 'title', 'content', 'updated_at', 'created_at']);

        return view('page')->with ([
            'header' => $this->header,
            'message' => $this->message,
            'articles' => $articles
        ]);
    }

    public function show($id)
    {
        $article = Article::select(['id', 'title', 'content', 'updated_at', 'created_at'])->where('id', $id)->first();

        return view('content')->with ([
            'header' => $this->header,
            'message' => $this->message,
            'article' => $article
        ]);
    }
}
