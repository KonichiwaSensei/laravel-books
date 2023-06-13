<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function example()
    // {
    //     // return [
    //     //     'The Shawshank redemption',
    //     //     'The Godfather',
    //     //     'The Godfather II',
    //     //     'Dark Knight',
    //     //     '12 angry men',
    //     //     'Schindler\'s list',
    //     //     'Pulp fiction',
    //     //     'Lord of the Rings: Return of the King',
    //     //     'The good, the bad and the ugly',
    //     //     'Fight club'
    //     // ];

    //     return Book::orderBy('title')->limit(2)->get();
    // }

    public function latest()
    {
        $latestBooks = Book::orderBy('publication_date', 'desc')->with('authors')->limit(10)->get();
        
        return $latestBooks;
    }

    public function index()
    {
        $books = Book::with('authors')->latest()->limit(1)->get();;
        
        return view('index.index', compact('books'));
    }

    
}
