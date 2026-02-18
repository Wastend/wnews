<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{

    protected $model = News::class;
    protected array $imageUrls = [
        'https://upload.wikimedia.org/wikipedia/commons/0/07/Jumping_Humpback_whale.jpg',
        'https://icdn.lenta.ru/images/2022/11/21/14/20221121144738311/preview_d8dd6bc4b22b19525dcb6f1403696daa.jpeg',
        'https://anna-news.info/wp-content/uploads/2018/02/tsifrovoe-obshhestvo-4-e1517739950977.jpg',
        'https://avilon.ru/upload/iblock/3c8/3c85ef7980bdf1833d2869b9deefaffb.jpg',
        'https://www.spacex.com/assets/images/updates/pre-strapi-updates/49399916862_804a949893_k.jpg',
    ];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(10),
            'description' => $this->faker->text(100),
            'image' => $this->faker->randomElement($this->imageUrls),
            'content' => $this->faker->paragraph(),
            'likes' => rand(1, 100),
            'is_published' => rand(0, 1),
            'category_id' => Category::all()->random()->id,
        ];
    }
}
