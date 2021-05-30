<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function getAllBooks() {
        $book = Book::get()->toJson(JSON_PRETTY_PRINT);
        return response($book, 200);
      }
    public function createBook(Request $request) {
        $book = new Book;
        $book->name = $request->name;
        $book->author = $request->author;
        $book->publishedDate = $request->publishedDate;
        $book->save();
    
        return response()->json([
            "message" => "record created"
        ], 201);
      }
}
