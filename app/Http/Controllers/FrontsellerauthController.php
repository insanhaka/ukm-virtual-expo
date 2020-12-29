<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api_url;

class FrontsellerauthController extends Controller
{
    public function register()
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }
        return view('Frontend.Sellers.register', ['url' => $url]);
    }

    public function verification()
    {
        return view('Frontend.Sellers.verification');
    }
}
