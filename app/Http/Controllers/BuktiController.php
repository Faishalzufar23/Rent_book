<?php

namespace App\Http\Controllers;
use App\Models\Bukti;
use App\Models\Buku;
use App\Models\User;

use Illuminate\Http\Request;

class BuktiController extends Controller
{
    public function index()
    {
        $users = User::with('buku')->get();
        return view('admin.bp', compact('users'));
    }
}
