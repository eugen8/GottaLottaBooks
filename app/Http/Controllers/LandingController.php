<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class LandingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //get list of books from DB
        $books = DB::select('select id, title, authors, isbn, substring(description, 1, 250) as description from book');
        //redirect to the view with variable 'books'...
        return view('landingPage',  ['books' => $books]);
    }
    
}
