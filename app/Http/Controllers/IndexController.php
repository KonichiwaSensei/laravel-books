<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function latest()
    {
        $latestBooks = Book::orderBy('publication_date', 'desc')->limit(10)->get();
        
        return $latestBooks;
    }
}
