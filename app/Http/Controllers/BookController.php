<?php


// app/Http/Controllers/BookController.php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Buku;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $bukus = buku::all();
        return view('admin.book', compact('bukus'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul_buku' => 'required|string|max:255',
            'author_buku' => 'required|string|max:255',
            'harga_buku' => 'required|numeric',
        ]);

        buku::create($validatedData);

        return redirect()->route('book')->with('success', 'Book created successfully!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('redirects')->with('success', 'Book deleted successfully!');
    }

}
