<?php

namespace App\Http\Controllers;
use DB;
use View;

class BookController extends Controller
{
    public function index($id) {
        $book = DB::table('book')->where('id', $id)->first();
        return view('bookDetails', ['book'=>$book]);
    }
}

?>