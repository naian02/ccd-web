<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class linkController extends Controller
{
    public function home()
    {
        return view ('home.index');
    }
    
    public function about()
    {
        return view ('about.index');
    }

    public function teams()
    {
        return view ('teams.index');
    }
}
