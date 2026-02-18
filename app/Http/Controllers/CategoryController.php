<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
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
