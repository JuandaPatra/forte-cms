<?php

namespace App\Http\Controllers\API;

use App\helpers\ApiFormatter;
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
		// $lang = '';

		
        // $ip =$request->ip();
        // $position = \Location::get($ip);
		
		// if($position->countryCode == "RU"){
		// 	$lang = 'ru';
		// }elseif($position->countryCode == "JP"){
		// 	$lang = 'ja';	
		// }else{
		// 	$lang = 'en';
		// }
		
		
		
        if($slug and $lang){
            $news = News::where('slug','=', $slug)->where('lang', '=', $lang)->first();
        }else{
            $news = News::where('lang', '=', $lang)->orderBy('created_at', 'DESC')->get();
        }
		
		
		

        return ApiFormatter::createApi(200, 'success', $news);
    }
}
