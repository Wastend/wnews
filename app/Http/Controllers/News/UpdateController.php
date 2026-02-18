<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends Controller
{

    public function __invoke(UpdateRequest $request, News $news)
    {
        $data = $request->validated();

        $tags = $data['tags'];
        unset($data['tags']);


        $news->update($data);
        $news->tags()->sync($tags);
        return redirect()
            ->route('news.show', $news)
            ->with('success', 'Новость успешно обновлена.');
    }
}
