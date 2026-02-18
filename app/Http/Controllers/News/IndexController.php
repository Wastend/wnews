<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\News;

class IndexController extends Controller
{

    public function __invoke()
    {
        $news = News::where('is_published', 1)
            ->latest()
            ->paginate(12);

        return view('news.index', ['news' => $news]);
    }
}
