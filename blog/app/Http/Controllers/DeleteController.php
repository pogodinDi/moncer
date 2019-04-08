<?php

namespace App\Http\Controllers;
use App\Article;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete($article)
    {
        $articled = Article::get('id')->where('id', $article)->first();
        $articled->delete();

        return redirect('/page');
    }
}
