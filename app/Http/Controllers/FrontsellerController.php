<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FrontsellerController extends Controller
{
    public function intro()
    {
        return view('Frontend.Sellers.intro');
    }
}
