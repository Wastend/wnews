<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\StoreRequest;
use App\Models\News;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);

        $post = News::create($data);

        $post->tags()->attach($tags);

        return redirect()
            ->route('news.show', $post)
            ->with('success', 'Новость успешно создана.');
    }
}
