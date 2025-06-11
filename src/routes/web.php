<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController; //2-5
use App\Http\Controllers\SessionController;// 3-3
use App\Models\Person; //3-8
use App\Models\Product; //3-9
use App\Http\Controllers\PenController; //3-10


Route::get('/', [AuthorController::class, 'index']);
Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/edit', [AuthorController::class, 'edit']);
Route::post('/edit', [AuthorController::class, 'update']);
Route::get('/delete', [AuthorController::class, 'delete']);
Route::post('/delete', [AuthorController::class, 'remove']);

Route::get('/find', [AuthorController::class, 'find']); // 2-4
Route::post('/find', [AuthorController::class, 'search']); // 2-4
Route::get('/author/{author}', [AuthorController::class, 'bind']); //2-4:暗黙の結合

// 2-4:バリデーション：エラー発生時の画面が一律で決まっている場合
Route::get('/verror', [AuthorController::class, 'verror']);

// 2-5:モデルのリレーションの基本
Route::prefix('book')->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/add', [BookController::class, 'add']);
    Route::post('/add', [BookController::class, 'create']);
});

// 2-5
Route::get('/relation', [AuthorController::class, 'relate']);

// 3-3
Route::get('/session', [SessionController::class, 'getSes']);
Route::post('/session', [SessionController::class, 'postSes']);

//3-8:論理削除の実装
Route::get('/softdelete', function () {
    Person::find(7)->delete();
});

//3-8:論理削除のデータを取得
Route::get('/softdelete/get', function () {
    $person = Person::onlyTrashed()->get();
    dd($person);
});

//3-8:論理削除のデータを復元
Route::get('softdelete/store', function() {
    $result = Person::onlyTrashed()->restore();
    echo $result;
});

//3-8:論理削除のデータを完全に削除
Route::get('softdelete/absolute', function() {
    $result = Person::onlyTrashed()->forceDelete();
    echo $result;
});


//3-9:Productモデルのルーティング
Route::get('uuid',function() {
        $products = Product::all();
        foreach($products as $product){
            echo $product.'<br>';
        }
});

//3-10:ルーティング
Route::get('fill', [PenController::class,'fillPen']);
Route::get('create', [PenController::class,'createPen']);
Route::get('insert', [PenController::class,'insertPen']);