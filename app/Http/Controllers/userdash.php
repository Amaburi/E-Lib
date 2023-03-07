<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class userdash extends Controller
{
    public function index()
    {
        $books = Book::all();
        // dd($addmovie);
        return view('userdash.index', compact('books'));
    }
}
