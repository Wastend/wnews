<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Http\Request;

class DestroyController extends Controller
{

    public function __invoke(News $news)
    {
        $news->delete();

        return redirect()
            ->route('news.index')
            ->with('success', 'Новость успешно удалена.');
    }
}
