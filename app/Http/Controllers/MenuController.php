<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $totalBuku = Buku::count();
        $totalUsers = User::count();
        return view('admin.menu', compact('totalBuku', 'totalUsers'));
    }
}
