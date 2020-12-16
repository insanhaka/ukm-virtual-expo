<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api_url;

class ApiController extends Controller
{
    
    public function dataurlapi()
    {
        $api_url = Api_url::all();

        return response()->json([
            'message' => 'success',
            'data' => $api_url
        ]);
    }

}
