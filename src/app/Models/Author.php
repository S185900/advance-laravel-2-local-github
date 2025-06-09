<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Author extends Model
{
    use HasFactory;

    // 1-15:今回は、name, age, nationalityカラムにデータを入れたいので、name, age, nationalityカラムに対して書き換え可能の$fillableを設定します。
    protected $fillable = ['name', 'age', 'nationality'];

    // 2-1:モデルにメソッドを追加
    // getDetail()はindex.blade.phpで利用される一つ一つのデータを加工するメソッドです。
    public function getDetail()
    {
        $txt = 'ID:'.$this->id . ' ' . $this->name . '(' . $this->age .  '才'.') '.$this->nationality;
        return $txt;
    }


    // 2-5
    public function book(){
        return $this->hasOne('App\Models\Book');
    }

    public function books(){
        return $this->hasMany('App\Models\Book');
    }

    // 2-6
    public function reviews()
    {
        // return $this->belongsToMany(Book::class);
        return $this->belongsToMany(Review::class)->withPivot('review');
    }

}

