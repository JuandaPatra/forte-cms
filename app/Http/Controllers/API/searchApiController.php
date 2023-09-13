<?php

namespace App\Http\Controllers\API;

use App\helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\News;
use App\Models\Products;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class searchApiController extends Controller
{
    public function search(Request $request)
    {

        $search = $request->input('search');
        $lang = $request->get('lang');

        $products = Products::query()
            ->where('lang', '=', $lang)
            ->where('name', 'LIKE', "%{$search}%")
            ->Where('description', 'LIKE', "%{$search}%")
            ->get();

        $news = News::where('lang', '=', $lang)->where('title', 'LIKE', "%{$search}%")
            ->Where('description1', 'LIKE', "%{$search}%")
            ->Where('description2', 'LIKE', "%{$search}%")
            ->get();
        $search = [
            'product' => $products,
            'news'    => $news,

        ];

        return ApiFormatter::createApi(200, 'success', $search);
    }
}
