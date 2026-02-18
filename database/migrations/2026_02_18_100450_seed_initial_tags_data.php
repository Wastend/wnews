<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedInitialTagsData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('tags')->insert([
            ['id' => 1, 'title' => 'Срочно', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 2, 'title' => 'Общество', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 3, 'title' => 'Технологии', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 4, 'title' => 'Спорт', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 5, 'title' => 'Город', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 6, 'title' => 'Фото', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 7, 'title' => 'Мнение', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 8, 'title' => 'Репортаж', 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tags')->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8])->delete();
    }
}
