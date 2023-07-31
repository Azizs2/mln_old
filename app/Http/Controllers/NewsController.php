<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function input()
    {
        return view('news.input');
    }

    public function store(Request $request)
    {

        $news = new News();
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->category = $request->input('category');
        $news->tags = $request->input('tags');
        $news->name_user = $request->input('name_user');
        $news->save();

        return redirect()->route('news.index');
    }

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', compact('news'));
    }
}
