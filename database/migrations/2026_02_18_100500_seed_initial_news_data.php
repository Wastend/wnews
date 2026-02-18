<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedInitialNewsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('news')->insert([
            [
                'id' => 1,
                'title' => 'Поляк нашел бобра и делал с ним всякое',
                'description' => 'История о неожиданной находке и реакции жителей небольшого поселка.',
                'content' => 'Житель поселка Фреска из Польши нашел у себя под домом бобра, после чего забрал его к себе в сарай. Там он его накормил, погладил и отпустил',
                'image' => 'https://i.47news.ru/titles/2024/03/20240313_7na28j8v5fp2rd14otwr.jpg',
                'likes' => 31,
                'is_published' => 1,
                'category_id' => 1,
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
                'deleted_at' => null,
            ],
            [
                'id' => 2,
                'title' => 'Сельский житель призвал дождь',
                'description' => 'Эксперимент с погодой закончился конфликтом с соседями.',
                'content' => 'Житель деревни Майнкрафт решил испытать новый режим в жизни. После этой мысли он зашел в консоль и вызвал дождь, что вызвало негодование среди соседей т.к. дело происходило зимой',
                'image' => 'https://aif-s3.aif.ru/images/045/075/5f6a49df3da995d7ba8b551ccdb338da.webp',
                'likes' => 1,
                'is_published' => 0,
                'category_id' => 2,
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
                'deleted_at' => null,
            ],
            [
                'id' => 3,
                'title' => 'В столице открылся новый технопарк',
                'description' => 'Городские власти запустили площадку для стартапов и IT-команд.',
                'content' => 'В центральном районе города состоялось открытие нового технопарка. Резиденты получат доступ к офисам, лабораториям и образовательным программам. По словам организаторов, первые команды начнут работу уже в этом месяце.',
                'image' => 'https://cdn.iz.ru/sites/default/files/styles/900x506/public/news-2025-12/Untitled-3_0.jpg',
                'likes' => 18,
                'is_published' => 1,
                'category_id' => 3,
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
                'deleted_at' => null,
            ],
            [
                'id' => 4,
                'title' => 'Футбольный клуб выиграл домашний матч',
                'description' => 'Команда одержала победу со счетом 2:1 в напряженной встрече.',
                'content' => 'Матч прошел при полном стадионе и завершился победой хозяев. Решающий гол был забит в добавленное время, что вызвало бурную реакцию болельщиков. Тренер отметил дисциплину и самоотдачу игроков.',
                'image' => 'https://s15.stc.yc.kpcdn.net/share/i/12/13787743/wr-960.webp',
                'likes' => 25,
                'is_published' => 1,
                'category_id' => 4,
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
                'deleted_at' => null,
            ],
            [
                'id' => 5,
                'title' => 'Ночной ремонт перекроет центральный проспект',
                'description' => 'Движение ограничат на несколько часов в ближайшую пятницу.',
                'content' => 'Городские службы сообщили о плановом ремонте дорожного полотна на центральном проспекте. Ограничения введут с 23:00 до 05:00. Водителям рекомендовали заранее выбирать объездные маршруты.',
                'image' => 'https://mr-7.ru/static/records/4f10b0984e9f44f2b635f0dcab569487.jpeg',
                'likes' => 3,
                'is_published' => 0,
                'category_id' => 5,
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
                'deleted_at' => null,
            ],
            [
                'id' => 8,
                'title' => 'Заголовок',
                'description' => 'Мое описание',
                'content' => '<h4><strong>Параграф</strong></h4><p>Хочу написать свой текст новости</p><ol><li>Преимущество 1</li><li>Преимещество 2</li></ol><p>Еще хочу таблицу скинуть</p><figure class="table"><table><tbody><tr><td>1</td><td>2</td><td>3</td><td>4</td></tr><tr><td>а</td><td>б</td><td>в</td><td>г</td></tr><tr><td>а1</td><td>б1</td><td>в1</td><td>г1</td></tr><tr><td>а2</td><td>б2</td><td>в2</td><td>г2</td></tr></tbody></table></figure>',
                'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/07/Jumping_Humpback_whale.jpg',
                'likes' => 0,
                'is_published' => 1,
                'category_id' => 2,
                'created_at' => '2026-02-17 09:55:31',
                'updated_at' => '2026-02-17 10:23:01',
                'deleted_at' => null,
            ],
            [
                'id' => 9,
                'title' => 'Все новости',
                'description' => '321321',
                'content' => '<p>321312</p>',
                'image' => '1111',
                'likes' => 0,
                'is_published' => 1,
                'category_id' => 2,
                'created_at' => '2026-02-17 10:30:44',
                'updated_at' => '2026-02-17 10:30:52',
                'deleted_at' => '2026-02-17 10:30:52',
            ],
            [
                'id' => 10,
                'title' => '321321',
                'description' => '1231232131',
                'content' => '<p>32131231</p>',
                'image' => '1111',
                'likes' => 0,
                'is_published' => 1,
                'category_id' => 2,
                'created_at' => '2026-02-17 10:31:39',
                'updated_at' => '2026-02-17 10:33:08',
                'deleted_at' => '2026-02-17 10:33:08',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('news')->whereIn('id', [1, 2, 3, 4, 5, 8, 9, 10])->delete();
    }
}
