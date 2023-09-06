<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\News;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class newsApiController extends Controller
{
    public function index(Request $request)
    {
        $slug = $request->get('news');
        $lang = $request->get('lang');


        $ip =$request->ip();
        $position = \Location::get();
        // $position = request()->ip();
        // $position = $request->ip();

        $whoIsIp = request()->ip();
        $userIp = '100.10.0.5';
        // $userIp = '127.0.0.1';
        $position = Location::get($userIp);

        if($position->countryCode = 'JP'){
            $lang = 'ja';
        }elseif($position->countryCode = 'RU'){
            $lang = 'ru';

        }else{
            $lang = 'en';
        }
        if($slug){
            $news = News::where('slug','=', $slug)->where('lang', '=', $lang)->first();
        }else{
            $news = News::where('lang', '=', $lang)->get();
        }

        return ApiFormatter::createApi(200, 'success', $news);
    }
}
