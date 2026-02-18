<?php

namespace App\Services\News;

use App\Models\News;

class Service
{
    public function store(array $data): News
    {
        $tags = $data['tags'] ?? [];
        unset($data['tags']);

        $post = News::create($data);

        $post->tags()->attach($tags);

        return $post;
    }

    public function update(News $news, array $data)
    {
        $tags = $data['tags'] ?? [];
        unset($data['tags']);


        $news->update($data);
        $news->tags()->sync($tags);
    }
}
