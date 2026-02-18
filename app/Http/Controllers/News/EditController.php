<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;

class EditController extends Controller
{

    public function __invoke(News $news)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('news.edit', ['post' => $news, 'categories' => $categories, 'tags' => $tags]);
    }
}
