<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";
    // khóa chính là id thì không cần phải viết lại
    // lọc các trường còn lại của bảng
    public $fillable = [
        "author_name"
    ];
}
