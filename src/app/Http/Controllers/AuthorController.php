<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
// 2-4:バリデーションの適用：
use App\Http\Requests\AuthorRequest;


class AuthorController extends Controller
{
    // データ一覧ページの表示
    public function index()
    {
        // $authors = Author::all();
        //2-3:デバッグ
        // dd($authors);

        // $authors = Author::simplePaginate(4); // 3-4:ぺージネーション
        $authors = Author::Paginate(4);
        return view('index', ['authors' => $authors]);
    }

   // データ追加用ページの表示
    public function add()
    {
        return view('add');
    }

    // 追加機能
    //2-4:バリデーション：RequestからAuthorRequestへ変更
    public function create(AuthorRequest $request)
    {
        $form = $request->all();
        //2-3:デバッグ
        // dd($form);
        Author::create($form);
        return redirect('/');
    }

    // データ編集ページの表示
    public function edit(Request $request){
        $author = Author::find($request->id);
        return view('edit', ['form' => $author]);
    }

    // 更新機能
    //2-4:バリデーション：RequestからAuthorRequestへ変更
    public function update(AuthorRequest $request)
    {
        $form = $request->all();
        //2-3:デバッグ
        // dd($form);
        unset($form['_token']);
        Author::find($request->id)->update($form);
        return redirect('/');
    }

    // データ削除用ページの表示
    public function delete(Request $request)
    {
        $author = Author::find($request->id);
        return view('delete', ['author' => $author]);
    }

    // 削除機能
    public function remove(Request $request)
    {
        Author::find($request->id)->delete();
        //2-3:デバッグ
        // dd($request->all());
        return redirect('/');
    }

    // 2-2:name属性を利用して検索
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        // 2-4:部分一致
        $item = Author::where('name', 'LIKE',"%{$request->input}%")->first();
        // 2-4:完全一致
        // $item = Author::where('name', $request->input)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }

    // 2-4:モデル結合ルートで検索
    public function bind(Author $author)
    {
        $data = [
            'item'=>$author,
        ];
        return view('author.binds', $data);
    }

    // 2-4:フォームリクエストでのリダイレクト先指定
    public function verror()
    {
    return view('verror');
    }



    public function relate()
    {
        $hasItems = Author::has('book')->get();
        $noItems = Author::doesntHave('book')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('author.index',$param);
    }

}

