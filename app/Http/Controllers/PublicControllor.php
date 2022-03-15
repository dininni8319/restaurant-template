<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicControllor extends Controller
{
    public function index() {
        return view('homepage');
    }
}
