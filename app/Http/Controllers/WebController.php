<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("home",[
            "books" => $books
        ]);
    }
    public function searchBox(Request $request)
    {
        $book1 = Book::where("title", $request->bookname)->get();
        return view("search", [
            "book1"=>$book1,
        ]);
    }
}
