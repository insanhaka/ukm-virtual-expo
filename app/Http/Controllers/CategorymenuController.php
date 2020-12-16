<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Api_url;
use App\Models\Category_menu;

class CategorymenuController extends Controller
{
    public function view()
    {
        $api_url = Api_url::all();

        if ($api_url == null) {
            echo "URL API Belum disetting";
        }else {
            foreach ( $api_url as $value)
            {
                $url = $value->url;
            }

            $get_category = Http::get($url.'/api/data-product-category');
            $category = $get_category['data'];
            
            $category_on_database = Category_menu::all();

            return view('Backend.CategoryMenu.index', ['category' => $category, 'database' => $category_on_database]);
        }
    }

    public function edit($id)
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        $get_category = Http::get($url.'/api/data-product-category');
        $category = $get_category['data'];

        foreach($category as $item)
        {
            if ($item['id'] == $id) {
                $result = $item;
            }
        }

        return view('Backend.CategoryMenu.edit', ['data' => $result]);
    }

    public function update(Request $request, $id)
    {

        dd($request->all());

        $file = $request->file('icon');

        $menus = Menu::findOrFail($id);

        if($file == null){
            echo "<h2>GAMBAR HARUS DI ISI YAH !!!!!!</h2>";
        }else{
            $nama_file = time()."_".$file->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'menus_icon';
            $file->move($tujuan_upload,$nama_file);

            $menus->name = $request->name;
            $menus->uri = $request->uri;
            $menus->is_active = $request->is_active;
            $menus->icon = $nama_file;

            $process = $menus->save();

            if ($process) {
                return redirect(url('/dapur/category-menu'))->with('updated','Data Berhasil Disimpan');
            } else {
                return back()->with('warning','Data Gagal Disimpan');
            }
        }

    }
}
