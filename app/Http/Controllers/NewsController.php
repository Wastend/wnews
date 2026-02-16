<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    public function index() {
        $posts = News::all();

        return view('news', ['posts' => $posts]);
    }

    public function create() {
        $postsArr = [
            [
                "title" => "Поляк нашел бобра и делал с ним всякое",
                "content" => "Житель поселка Фреска из Польши нашел у себя под домом бобра, после чего забрал его к себе в сарай. Там он его накормил, погладил и отпустил",
                "image" => "imageBobr.png",
                "likes" => 31,
                "is_published" => 1,
            ],
            [
                "title" => "Сельский житель призвал дождь",
                "content" => "Житель деревни Майнкрафт решил испытать новый режим в жизни. После этой мысли он зашел в консоль и вызвал дождь, что вызвало негодование среди соседей т.к. дело происходило зимой",
                "image" => "imageRain.jpeg",
                "likes" => 1,
                "is_published" => 0,
            ],
        ];

        foreach($postsArr as $item){
            News::create($item);
        }
    }

    public function update() {
        $post = News::find(1);

        $post->update([
            'likes' => 11
        ]);
    }

    public function delete() {
        $post = News::find(2);

        $post->delete();
    }

    public function firstOrCreate() {

        $anotherPost = [
            "title" => "В сентябре мороз",
            "content" => "В сентабре погода -20 градусов",
            "image" => "weather.png",
            "likes" => 123,
            "is_published" => 1,
        ];

        $post = News::firstOrCreate([
            "title" => "В сентябре холодно"
        ],$anotherPost);
    }

    public function updateOrCreate() {

        $anotherPost = [
            "title" => "В сентябре мороз",
            "content" => "В сентабре погода -20 градусов",
            "image" => "weather.png",
            "likes" => 1,
            "is_published" => 1,
        ];

        $post = News::updateOrCreate([
            "title" => "В сентябре холодно"
        ],$anotherPost);
    }
}
