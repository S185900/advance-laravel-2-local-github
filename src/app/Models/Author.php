<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    // 1-15:今回は、name, age, nationalityカラムにデータを入れたいので、name, age, nationalityカラムに対して書き換え可能の$fillableを設定します。
    protected $fillable = ['name', 'age', 'nationality'];
}

