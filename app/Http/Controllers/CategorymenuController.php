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
        $menus = Category_menu::where('product_category_id', $id)->first();

        if ($menus == null) {

            $create = new Category_menu;
            $create->product_category_id = $id;
            $create->product_category_name = $request->product_category_name;
            $create->product_category_uri = $request->product_category_uri;
            $create->is_active = $request->is_active;

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('icon');
            if($file == null){
                $nama_file = "";
                $create->icon = $nama_file;
            }else{
                $nama_file = time()."_".$file->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'menus_icon';
                $file->move($tujuan_upload, $nama_file);
                $create->icon = $nama_file;
            }

                $process = $create->save();
                if ($process) {
                    return redirect(url('/dapur/category-menu'))->with('updated','Data Berhasil Disimpan');
                } else {
                    return back()->with('warning','Data Gagal Disimpan');
                }

        }else {

            $menus->product_category_id = $id;
            $menus->product_category_name = $request->product_category_name;
            $menus->product_category_uri = $request->product_category_uri;
            $menus->is_active = $request->is_active;

            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('icon');
            if($file == null){
                $nama_file = "";
                $menus->icon = $nama_file;
            }else{
                $nama_file = time()."_".$file->getClientOriginalName();
                // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'menus_icon';
                $file->move($tujuan_upload, $nama_file);
                $menus->icon = $nama_file;
            }

                $process = $menus->save();
                if ($process) {
                    return redirect(url('/dapur/category-menu'))->with('updated','Data Berhasil Disimpan');
                } else {
                    return back()->with('warning','Data Gagal Disimpan');
                }
        }

    }
}
