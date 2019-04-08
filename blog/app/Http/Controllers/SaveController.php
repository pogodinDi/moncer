<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class SaveController extends Controller
{
    public function save(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:18',
            'content' => 'required|max:255'
        ]);

        $store = $request->all();
        $article = new Article;
        $article->fill($store);

        $article->save();

        return redirect('/page');
    }
}
