<?php

# 1-11: マイグレーションの基本的な枠組みが記述されています。
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        # 1-11: Schema::create・・・は、ターミナルコマンドでauthorsテーブルを作成すると自動的に作成される
        Schema::create('authors', function (Blueprint $table) {
            $table->id(); # 1: 自動生成(オートインクリメント)される/主キーのIDカラムを作成
            # $table->bigIncrements('id');でも同じ意味になります。
            $table->string('name', 100); # 2: 著者の名前を格納するカラム(文字列100文字まで)
            $table->integer('age'); # 3: 著者の年齢を格納するカラム(整数型)
            $table->string('nationality', 100); # 4: 著者の国籍を格納するカラム(文字列100文字まで)
            $table->timestamp('created_at')->useCurrent()->nullable(); # 5: レコードの作成日時を格納するカラム(現在時刻をデフォルト値とし、NULL許容)
            $table->timestamp('updated_at')->useCurrent()->nullable(); # 6: レコードの更新日時を格納するカラム(現在時刻をデフォルト値とし、NULL許容)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
