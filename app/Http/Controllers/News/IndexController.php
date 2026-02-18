<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\News;

class IndexController extends Controller
{

    public function __invoke()
    {
        $news = News::query()
            ->where('is_published', 1)
            ->latest()
            ->get();

        return view('news.index', ['news' => $news]);
    }
}
