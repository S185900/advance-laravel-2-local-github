<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //3-9:隠すものと隠さないものを指定

    //表示
    protected $fillable = [
        'uuid', 'name', 'price',
    ];

    //非表示
    protected $hidden = [
        'id', 'created_at', 'updated_at'
    ];

    use HasFactory;
}
