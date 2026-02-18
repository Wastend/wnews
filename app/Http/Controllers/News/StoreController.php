<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;

use App\Http\Requests\Post\StoreRequest;
use App\Models\News;
use Illuminate\Http\Request;

class StoreController extends BaseController
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        $post = $this->service->store($data);

        return redirect()
            ->route('news.show', $post)
            ->with('success', 'Новость успешно создана.');
    }
}
