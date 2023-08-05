<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaypageController extends Controller
{
    public function index()
    {
        return view('paypage');
    }
}
