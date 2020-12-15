<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Api_url;

class FrontproductController extends Controller
{
    public function detail($id)
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        $get_product = Http::get($url.'/api/data-product');
        $product = $get_product['data'];

        $get_photo_product = Http::get($url.'/api/data-photo-product');
        $photo_product = $get_photo_product['data'];

        $get_business = Http::get($url.'/api/data-business');
        $business = $get_business['data'];

        foreach( $product as $item )
        {
            if ($item['id'] == $id) {
                $data_product = $item;
            }
        }

        $business_id = $data_product['business_id'];

        foreach( $business as $result )
        {
            if ( $result['id'] == $business_id )
            {
                $data_business = $result;
            }
        }

        return view('Frontend.productview', ['product' => $data_product, 'photo' => $photo_product, 'apiurl' => $url, 'business' => $data_business]);
    }
}
