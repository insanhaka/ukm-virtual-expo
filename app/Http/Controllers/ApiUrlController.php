<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api_url;

class ApiUrlController extends Controller
{
    public function view()
    {
        $urls = Api_url::all();
        return view('Backend.ApiUrl.index', ['url' => $urls]);
    }

    public function add()
    {
        return view('Backend.ApiUrl.create');
    }

    public function create(Request $request)
    {
        Api_url::create(['url' => $request->url]);
        return redirect(url('/dapur/api-url'))->with('created','Data Berhasil Disimpan');
    }
}
