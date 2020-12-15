<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use App\Models\Api_url;

class FrontcategoriesController extends Controller
{
    public function index()
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        $get_category = Http::get($url.'/api/data-product-category');
        $category = $get_category['data'];
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

        $category_id = Str::before($data, '-');
        $category_name = Str::after($data, '-');
        $get_product = Http::get($url.'/api/data-product');
        $product = $get_product['data'];

        $get_photo_product = Http::get($url.'/api/data-photo-product');
        $photo_product = $get_photo_product['data'];

        foreach( $product as $item )
        {
            if ($item['product_categories_id'] == $category_id) {
                $data_product[] = $item;
            }
        }

        return view('Frontend.product', ['product' => $data_product, 'photo' => $photo_product, 'category' => $category_name, 'apiurl' => $url]);
    }
}
