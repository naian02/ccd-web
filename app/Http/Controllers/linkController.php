<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkController extends Controller
{
    public function home()
    {
        return view ('home.index');
    }
}
