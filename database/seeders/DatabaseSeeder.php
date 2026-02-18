<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(15)->create();
        $tags = Tag::factory(40)->create();
        $news = News::factory(150)->create();

        foreach ($news as $post) {
            $tagsIds = $tags->random(rand(1, 5))->pluck('id');
            $post->tags()->attach($tagsIds);
        }

        // \App\Models\User::factory(10)->create();
    }
}
