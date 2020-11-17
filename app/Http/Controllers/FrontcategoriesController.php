<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontcategoriesController extends Controller
{
    public function index()
    {
        return view('Frontend.categories');
    }
}
