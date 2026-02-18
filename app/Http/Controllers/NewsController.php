<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $posts = News::query()
            ->where('is_published', 1)
            ->latest()
            ->get();

        return view('news.index', ['posts' => $posts]);
    }

    public function show(News $news){
        return view('news.show', ['post' => $news]);
    }

    public function category(Category $category)
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

    public function create() {
        return view('news.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string|max:2048',
        ]);

        $data['is_published'] = $request->boolean('is_published');

        $post = News::create($data);

        return redirect()
            ->route('news.show', $post)
            ->with('success', 'Новость успешно создана.');
    }

    public function edit(News $news) {
       return view('news.edit', ['post' => $news]);
    }

    public function update(Request $request, News $news) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string|max:2048',
        ]);

        $data['is_published'] = $request->boolean('is_published');
        $news->update($data);

        return redirect()
            ->route('news.show', $news)
            ->with('success', 'Новость успешно обновлена.');
    }

    public function destroy(Request $request, News $news) {
        $news->delete();

        return redirect()
            ->route('news.index')
            ->with('success', 'Новость успешно удалена.');
    }
}
