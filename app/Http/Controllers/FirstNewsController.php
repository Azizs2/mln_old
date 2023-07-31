<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstNewsController extends Controller
{
    public function all()
    {
        return view('first');
    }

    public function news_1()
    {
        return view('allnews.second');
    }
}
