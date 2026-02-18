<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;

class CategoryController extends Controller
{

    public function __invoke(Category $category)
    {
        $posts = News::query()
            ->where('is_published', 1)
            ->where('category_id', $category->id)
            ->latest()
            ->get();

        return view('news.category', [
            'category' => $category,
            'posts' => $posts,
        ]);
    }
}
