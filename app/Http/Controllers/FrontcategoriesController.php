<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Api_url;
use App\Models\Category_menu;

class FrontcategoriesController extends Controller
{
    public function index()
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        // $get_category = Http::get($url.'/api/data-product-category');
        // $category = $get_category['data'];
        $category = Category_menu::all();
        // dd($category);
        return view('Frontend.categories', ['category' => $category, 'apiurl' => $url]);
    }

    public function category($data)
    {

        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        $category_id = intval(Str::before($data, '-'));
        $get_category_name = Category_menu::where('product_category_id', $category_id)->first();
        $category_name = $get_category_name->product_category_name;

        // dd($category_id);

        $get_business = Http::get($url.'/api/data-business');
        $business = $get_business['data'];

        $get_product = Http::get($url.'/api/data-product');
        $product = $get_product['data'];

        $get_photo_product = Http::get($url.'/api/data-photo-product');
        $photo_product = $get_photo_product['data'];

        // dd($product);

        foreach( $product as $item )
        {
            if ($item['product_categories_id'] == $category_id) {
                $data_product[] = $item;
            }
        }

        return view('Frontend.product', ['business' => $business, 'product' => $data_product, 'photo' => $photo_product, 'category' => $category_name, 'apiurl' => $url]);

        // foreach( $product as $item )
        // {
        //     if ($item['product_categories_id'] == $category_id) {
        //         $data_product[] = $item;
        //     }else{
        //         $data_product = 'kosong';
        //     }
        // }

        // if ($data_product === "kosong") {
        //     return view('Frontend.soryempty');
        // }

        // return view('Frontend.product', ['product' => $data_product, 'photo' => $photo_product, 'category' => $category_name, 'apiurl' => $url]);
    }
}
