<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
    /**
     * return all the books
     * this should come from the route GET api/books
     */
    public function index()
    {

        return Book::all();
    }
    /**
     * show a particular book
     * this should come from the route GET api/books/{id}
     */
    public function show(Book $book)
    {
        return $book;
    }
    /**
     * create a new book
     * this should come from the route POST api/books
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());

        return response()->json($book, 201);
    }
    /**
     * update existing book with new data
     * this should come from the route PUT api/books/{id} 
     */
    public function update(Request $request, Book $book)
    {
        $book->update($request->all());

        return response()->json($book, 200);
    }
    /**
     * delete a particular book,
     * this should come from the route DELETE api/books/{id} 
     */
    public function delete(Book $book)
    {
        $book->delete();

        return response()->json(null, 204);
    }
}
