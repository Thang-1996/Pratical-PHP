<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $books = Book::all();
        return view("home",[
            "books" => $books
        ]);
    }
    public function searchBox(Request $request){
        $inputSearch = $request->get("title");
        $searchBooks = Book::findOrFail($inputSearch);
        return view("search",[
            "searchBooks" => $searchBooks,
        ]);
    }
}
