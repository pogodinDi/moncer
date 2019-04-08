<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class Addcontroller extends Controller
{
    protected $header = 'Hello world!';
    protected $message = 'Here will be some text';

    public function add()
    {
        return view('add-content')->with ([
            'header' => $this->header,
            'message' => $this->message,
        ]);
    }
}
