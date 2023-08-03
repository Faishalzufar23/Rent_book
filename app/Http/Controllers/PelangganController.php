<?php

// app/Http/Controllers/BookController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.pelanggan', compact('users'));
    }
}
