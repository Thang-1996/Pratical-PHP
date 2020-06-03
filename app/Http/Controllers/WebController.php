<?php

namespace App\Http\Controllers;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Exception;

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
    public function newBook(){
        $authors = Author::all();
        // phai lay du lieu tu cac bang phu
        return view("new",[
            "authors" => $authors,
        ]);
    }
    public function saveBook(Request $request){ // tạo biến request lưu dữ liệu người dùng gửi lên ở body
        // đầu tiên phải validate dữ liệu cả bên html và bên sever
        // cách validate
        $request->validate([
            "title" => "required|min:6",
        ]);
        try {
            // bắt lỗi nếu không có = null
            Book::create([
                "title" =>$request->get("title"),
                "ISBN" =>$request->get("isbn"),
                "pub_year" =>$request->get("pub_year"),
                "avaiable" =>$request->get("avaiable"),
                "author_id" =>$request->get("author_id"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/");
    }

    public function editBook($id, Request $request){
        $author = Author::all();
        $books = Book::findOrFail($id);
        return view("edit",[
            "authors"=>$author,
            "books" => $books,
        ]);
    }
    public function deleteBook($id){
        $books = Book::findorFail($id);
        try {
            $books->delete();
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/");
    }
    public function updateBook($id,Request $request){
        $books = Book::findOrFail($id);
        $request->validate([ // unique voi categories(table) category_name(truong muon unique), (id khong muon bi unique)
            "title" => "required|min:6",

        ]);
        try{
            $books->update([
                "title" =>$request->get("title"),
                "ISBN" =>$request->get("isbn"),
                "pub_year" =>$request->get("pub_year"),
                "avaiable" =>$request->get("avaiable"),
                "author_id" =>$request->get("author_id"),
            ]);
        }catch(Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/");
    }
}
