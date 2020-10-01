<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TubanController extends Controller
{
    public function index()
    {
        return view('data-tuban.index');
    }
}
