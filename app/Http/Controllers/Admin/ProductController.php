<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\Categories;
use App\Models\ProductMain;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductMain::all();


        return view('admin.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categories::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'title'                 =>  'required|string|max:100',
                'slug'                  =>  'required|string',
                'name0'                 =>  'required',
                'description0'          =>  'required',
                'name1'                 =>  'required',
                'description1'          =>  'required',
                'name2'                 =>  'required',
                'description2'          =>  'required',
                'lang'                  =>  'required',
                'category'              =>  'required',
                'intensity'             =>  'required',
                'body'                  =>  'required',
                'smoothness'            =>  'required',
                'sensation'             =>  'required',
                'diameter'              =>  'required',
                'length'                =>  'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = ProductMain::create([
                'name'         =>  $request->title,
                'slug'          =>  $request->slug,
                'order'         => 1
            ]);
            DB::commit();
            $product = ProductMain::where('slug', '=', $request->slug)->first();
            $productNameLang = [
                $request->name0,
                $request->name1,
                $request->name2,
            ];
            $productDescLang = [
                $request->description0,
                $request->description1,
                $request->description2,
            ];

            for ($i = 0; $i < 3; $i++) {
                try {
                    $post = Products::create([
                        'product_id'                    =>  $product->id,
                        'lang'                          =>  $request->lang[$i],
                        'name'                          =>  $productNameLang[$i],
                        'description'                   =>  $productDescLang[$i],
                        'category'                      =>  $request->category,
                        'intensity'                     =>  $request->intensity,
                        'body'                          =>  $request->body,
                        'smoothness'                    =>  $request->smoothness,
                        'sensation'                     =>  $request->sensation,
                        'diameter'                      =>  $request->diameter,
                        'length'                        =>  $request->length
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Product', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }


            Alert::success('Tambah Product', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Product', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $product = ProductMain::where('id', '=', $id)->first();
        $productDetail = Products::where('product_id', '=', $product->id)->get();
        $categories = Categories::all();

        return view('admin.product.edit', compact('product', 'productDetail', 'categories'));
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

        $validator = Validator::make(
            $request->all(),
            [
                'title'                 =>  'required|string|max:100',
                'slug'                  =>  'required|string',
                'name0'                 =>  'required',
                'description0'          =>  'required',
                'name1'                 =>  'required',
                'description1'          =>  'required',
                'name2'                 =>  'required',
                'description2'          =>  'required',
                'lang'                  =>  'required',
                'category'              =>  'required',
                'intensity'             =>  'required',
                'body'                  =>  'required',
                'smoothness'            =>  'required',
                'sensation'             =>  'required',
                'diameter'              =>  'required',
                'length'                =>  'required'
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert


        DB::beginTransaction();
        try {
            $post = ProductMain::whereId($id);
            $post->update([
                'name'         =>  $request->title,
                'slug'          =>  $request->slug,
                'order'         => 1
            ]);

            DB::commit();


            $product = ProductMain::where('id', '=', $id)->first();
            $productNameLang = [
                $request->name0,
                $request->name1,
                $request->name2,
            ];
            $productDescLang = [
                $request->description0,
                $request->description1,
                $request->description2,
            ];
            $productDetail = Products::where('product_id', '=', $id)->get();
            for ($i = 0; $i < 3; $i++) {
                try {

                    $productDetail[$i]->update([
                        'product_id'                    =>  $product->id,
                        'lang'                          =>  $request->lang[$i],
                        'name'                          =>  $productNameLang[$i],
                        'description'                   =>  $productDescLang[$i],
                        'category'                      =>  $request->category,
                        'intensity'                     =>  $request->intensity,
                        'body'                          =>  $request->body,
                        'smoothness'                    =>  $request->smoothness,
                        'sensation'                     =>  $request->sensation,
                        'diameter'                      =>  $request->diameter,
                        'length'                        =>  $request->length
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Product', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }


            Alert::success('Tambah Product', 'Berhasil');
            return redirect()->route('product.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah Product', 'error' . $th->getMessage());
            return redirect()->back()->withInput($request->all());
        } finally {
            DB::commit();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $product = Products::where('product_id', '=', $id)->get();

        $productMain = ProductMain::whereId($id);
        $productMain->delete();


        $product->map->delete();
        Alert::success('Hapus Product', 'Berhasil');
        return redirect()->route('product.index');
    }
}
