<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Api_url;

class FrontbusinessController extends Controller
{
    public function detail($id)
    {
        $api_url = Api_url::all();
        foreach ( $api_url as $value)
        {
            $url = $value->url;
        }

        $get_owner = Http::get($url.'/api/data-owner');
        $owner = $get_owner['data'];

        $get_business = Http::get($url.'/api/data-business');
        $business = $get_business['data'];

        $get_product = Http::get($url.'/api/data-product');
        $product = $get_product['data'];

        $get_photo_product = Http::get($url.'/api/data-photo-product');
        $photo_product = $get_photo_product['data'];

        foreach( $business as $result )
        {
            if ( $result['id'] == $id )
            {
                $data_business = $result;
            }
        }

        foreach( $product as $item )
        {
            if ( $item['business_id'] == $id )
            {
                $data_product[] = $item;
            }
        }

        $count_product = count($data_product);

        foreach( $owner as $person )
        {
            if( $data_business['business_owner_id'] == $person['id'] )
            {
                $data_owner = $person;
            }
        }

        return view('Frontend.business', ['apiurl' => $url, 'business' => $data_business, 'photo' => $photo_product, 'product' => $data_product, 'count_product' => $count_product, 'owner' => $data_owner]);
    }
}
