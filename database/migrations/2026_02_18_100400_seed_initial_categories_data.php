<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedInitialCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'title' => 'Происшествия',
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
            ],
            [
                'id' => 2,
                'title' => 'Общество',
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
            ],
            [
                'id' => 3,
                'title' => 'Технологии',
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
            ],
            [
                'id' => 4,
                'title' => 'Спорт',
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
            ],
            [
                'id' => 5,
                'title' => 'Город',
                'created_at' => '2026-02-17 09:19:35',
                'updated_at' => '2026-02-17 09:19:35',
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
        DB::table('categories')->whereIn('id', [1, 2, 3, 4, 5])->delete();
    }
}
