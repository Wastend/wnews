<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class SeedInitialNewsTagData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('news_tag')->insert([
            ['id' => 1, 'news_id' => 1, 'tag_id' => 1, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 2, 'news_id' => 1, 'tag_id' => 2, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 3, 'news_id' => 2, 'tag_id' => 2, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 4, 'news_id' => 2, 'tag_id' => 7, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 5, 'news_id' => 3, 'tag_id' => 3, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 6, 'news_id' => 3, 'tag_id' => 8, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 7, 'news_id' => 4, 'tag_id' => 4, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 8, 'news_id' => 4, 'tag_id' => 1, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 9, 'news_id' => 5, 'tag_id' => 5, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 10, 'news_id' => 5, 'tag_id' => 1, 'created_at' => '2026-02-17 09:19:35', 'updated_at' => '2026-02-17 09:19:35'],
            ['id' => 11, 'news_id' => 8, 'tag_id' => 6, 'created_at' => '2026-02-17 09:55:31', 'updated_at' => '2026-02-17 10:23:01'],
            ['id' => 12, 'news_id' => 8, 'tag_id' => 8, 'created_at' => '2026-02-17 09:55:31', 'updated_at' => '2026-02-17 10:23:01'],
            ['id' => 13, 'news_id' => 9, 'tag_id' => 7, 'created_at' => '2026-02-17 10:30:44', 'updated_at' => '2026-02-17 10:30:52'],
            ['id' => 14, 'news_id' => 10, 'tag_id' => 7, 'created_at' => '2026-02-17 10:31:39', 'updated_at' => '2026-02-17 10:33:08'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('news_tag')->whereIn('id', [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14])->delete();
    }
}
