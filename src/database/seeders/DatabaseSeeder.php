<?php

namespace Database\Seeders;

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
        # 1-12:callメソッドでシーダを指定することで、そのシーダーファイルのシーディング処理が実行される
        $this->call(AuthorsTableSeeder::class);
    }
}
