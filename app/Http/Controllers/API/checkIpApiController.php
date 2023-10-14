<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;
use App\helpers\ApiFormatter;

class checkIpApiController extends Controller
{
    public function index(Request $request)
    {
        // $ip = $request->ip();
        $ip = $request->get('ip');

        $position = \Location::get($ip);

        if ($position->countryCode == "RU") {
            $lang = 'ru';
        } elseif ($position->countryCode == "JP") {
            $lang = 'ja';
        } else {
            $lang = 'en';
        }

        $data = [
            'detail'   => $position,
            'language' => $lang
        ];

        return ApiFormatter::createApi(200, 'success', $data);
    }

    
}
