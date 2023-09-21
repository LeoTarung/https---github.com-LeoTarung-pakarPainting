<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PakarController extends Controller
{
    public function indexHome()
    {
        $title = 'Home';
        return view('homeUser', compact('title'));
    }
}
