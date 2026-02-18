<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;

class NewsController extends Controller
{
    public function index() {
        $news = News::query()
            ->where('is_published', 1)
            ->latest()
            ->get();

        return view('news.index', ['news' => $news]);
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
        $categories = Category::all();
        $tags = Tag::all();
        return view('news.create', ['categories' => $categories, 'tags' => $tags]);
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|string|max:2048',
            'is_published' => '',
            'category_id' => '',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);

        $post = News::create($data);

        $post->tags()->attach($tags);

        return redirect()
            ->route('news.show', $post)
            ->with('success', 'Новость успешно создана.');
    }

    public function edit(News $news) {
        $categories = Category::all();
        $tags = Tag::all();
       return view('news.edit', ['post' => $news, 'categories' => $categories, 'tags' => $tags]);
    }

    public function update(Request $request, News $news) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'content' => 'required|string',
            'category_id' => '',
            'is_published' => '',
            'image' => 'nullable|string|max:2048',
            'tags' => '',
        ]);

        $tags = $data['tags'];
        unset($data['tags']);


        $news->update($data);
        $news->tags()->sync($tags);
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
