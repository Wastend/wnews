<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::query()
            ->withCount([
                'news as published_news_count' => function ($query) {
                    $query->where('is_published', 1);
                },
            ])
            ->orderBy('title')
            ->get();
        return view('categories.index', ['categories' => $categories]);
    }
}
