<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{

    public function __invoke(UpdateRequest $request, News $news)
    {
        $data = $request->validated();

        $this->service->update($news, $data);

        return redirect()
            ->route('news.show', $news)
            ->with('success', 'Новость успешно обновлена.');
    }
}
