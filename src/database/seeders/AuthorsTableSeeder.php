<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

# 1-12:DBファサードを使用して、データベース操作を行うために必要なクラスをインポートします。
use Illuminate\Support\Facades\DB;

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
        $param = [
            'name' => 'tony',
            'age' => 35,
            'nationality' => 'American'
            ];
        DB::table('authors')->insert($param); # 1-12:authorsテーブルに$paramのデータを挿入するという命令
        $param = [
            'name' => 'jack',
            'age' => 20,
            'nationality' => 'British'
            ];
        DB::table('authors')->insert($param); # 1-12:authorsテーブルに$paramのデータを挿入するという命令
        $param = [
            'name' => 'sara',
            'age' => 45,
            'nationality' => 'Egyptian'
            ];
        DB::table('authors')->insert($param); # 1-12:authorsテーブルに$paramのデータを挿入するという命令
        $param = [
            'name' => 'saly',
            'age' => 31,
            'nationality' => 'Chinese'
            ];
        DB::table('authors')->insert($param); # 1-12:authorsテーブルに$paramのデータを挿入するという命令
    }
}
