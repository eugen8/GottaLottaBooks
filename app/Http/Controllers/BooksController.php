<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Book;
class BooksController extends Controller
{
    public function index() {

        //$pages = Page::all();;
        return Book::all();
    }
   

    
}