<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use \App\Models\Person;// 3-8:
use App\Models\Product;// 3-9:

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 1-12:callメソッドでシーダを指定することで、そのシーダーファイルのシーディング処理が実行される
        // $this->call(AuthorsTableSeeder::class);
        Author::factory(10)->create();

        // 3-8:Personモデルのファクトリを使用して、10件のデータを生成
        Person::factory(10)->create();

        // 3-9:Productモデルのファクトリを使用して、10件のデータを生成
        Product::factory(10)->create();
    }
}
