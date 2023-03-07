<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;
class userdash extends Controller
{
    public function index()
    {
        $books = Book::all();
        // dd($addmovie);
        return view('userdash.index', compact('books'));
    }
   

    public function search(Request $request)
    {
        $query = $request->input('query');

        $books = DB::table('books')
                ->where('name', 'like', '%'.$query.'%')
                ->get();

        return view('userdash.index', compact('books'));
    }


}
