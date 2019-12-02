<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Book;
class BooksController extends Controller
{
    public function index() {

        //$pages = Page::all();;
        $books=array(
            "title" => "hello",
            "description" => "test test test"
          );
          return response()->json([
            'books' => $books
        ], 200);
    }
   

    
}
