<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BookController extends Controller
{
    public function index()
    {
        $bukus = buku::all();
        return view('admin.book', compact('bukus'));
    }
}
