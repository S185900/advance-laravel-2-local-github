<?php

namespace App\Http\Controllers;

// Eloquentを使用できるようにAuthorモデルを読み込む
use App\Models\Author; # 1-13:Authorモデルを使用するためにインポート
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    // 1-15:データ追加用ページの表示（addアクション）
    public function add()
    {
        return view('add');
    }

    // 1-15:リクエストボディを受け取る（createアクション）
    public function create(Request $request){
        $form = $request->all();
        Author::create($form); // データベースに新しいレコードを追加（保存）
        return redirect('/');
    }

    // 上記において「データ追加用ページ」のinputタグのname属性がテーブルのカラム名と一致していない場合：
        //$form = [
    //     'name' => $request->name,
    //     'age' => $request->age,
    //     'nationality' => $request->country,
    // ];
    // Author::create($form);


    // 1-14:ページ表示（indexアクション）
    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }


}
