<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

# 1-12:DBファサードを使用して、データベース操作を行うために必要なクラスをインポートします。
use Illuminate\Support\Facades\DB;

# 3-7:Authorモデルを利用して Eloquent からファクトリを呼び出し
use App\Models\Author;


class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    # 1-12:phpコンテナ内でシーダーファイルの作成後、このファイルが作成される。
    # 1-12:runメソッドが1つだけ用意されています。
    # 1-12:runメソッドに、authorsテーブルのシードを作成する処理を用意する。
    public function run()
    {
        Author::factory()->count(3)->create();
    }
}
