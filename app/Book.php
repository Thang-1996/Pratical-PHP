<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    // khóa chính là id thì không cần phải viết lại
    // lọc các trường còn lại của bảng
    public $fillable = [
        "title",
        "ISBN",
        "pub_year",
        "avaiable",
        "author_id",
    ];

}
