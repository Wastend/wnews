<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\News;

class ShowController extends Controller
{

    public function __invoke(News $news)
    {
        return view('news.show', ['post' => $news]);
    }
}
