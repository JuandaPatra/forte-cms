<?php

namespace App\Http\Controllers\API;

use App\helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\ProductMain;
use App\Models\Products;
use Illuminate\Http\Request;

class productApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($lang)
    {
        $product = Products::where('lang', '=', $lang)->get();

        // $product = Products::select('products.*')


        return ApiFormatter::createApi(200, 'success', $product);
    }

    public function category(Request $request)
    {

        $status = $request->get('category');
        $lang = $request->get('lang');

        $category = Categories::where('slug', '=', $status)->first();


        $product = Products::where('category', '=', $category->id)
                    ->leftJoin('product_mains','product_mains.id', '=', 'products.product_id')
                    ->where('lang', '=', $lang)
                    ->addSelect('product_mains.*','products.name as name', 'products.*', )
                    ->get();

        return ApiFormatter::createApi(200, 'success', $product);
    }


    public function product(Request $request, $slug)
    {
        $lang = $request->get('lang');

        $productDetail = ProductMain::select('product_mains.*')
            ->leftJoin('products', 'products.product_id', '=', 'product_mains.id')
            ->where('slug', '=', $slug)
            ->where('lang', '=', $lang)
            ->addSelect('products.name as name', 'products.*')
            ->first();


        return ApiFormatter::createApi(200, 'success', $productDetail); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
