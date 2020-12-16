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

    public function edit($id)
    {
        $url = Api_url::findOrFail($id);
        return view('Backend.ApiUrl.edit', ['data' => $url]);
    }

    public function update(Request $request, $id)
    {
        $url = Api_url::findOrFail($id);
        $url->url = $request->url;
        $process = $url->save();

        if ($process) {
            return redirect(url('/dapur/api-url'))->with('updated','Data Berhasil Disimpan');
        } else {
            return back()->with('warning','Data Gagal Disimpan');
        }
    }

    public function delete($id)
    {
        $url = Api_url::find($id);
        $process = $url->delete();

        if ($process) {
            return redirect(url('/dapur/api-url'))->with('deleted','Data Berhasil Dihapus');
        } else {
            return back()->with('warning','Data Gagal Dihapus');
        }
    }
}
