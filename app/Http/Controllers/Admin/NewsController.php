<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\NewsMain;
use Carbon\Carbon;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = NewsMain::all();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
                'slug'                  =>  'required|string|unique:product_mains,slug',
                'name0'                 =>  'required',
                'description0'          =>  'required',
                'name1'                 =>  'required',
                'description1'          =>  'required',
                'name2'                 =>  'required',
                'description2'          =>  'required',
                'lang'                  =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {
            $post = NewsMain::create([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
            ]);
            DB::commit();
            $product = NewsMain::where('slug', '=', $request->slug)->first();


            $news = [
                [
                    $shortDescription = $request->shortdesc0,
                    $newsLang = $request->lang[0],
                    $name = $request->name0,
                    $description = $request->description0
                ],
                [
                    $shortDescription = $request->shortdesc1,
                    $newsLang = $request->lang[1],
                    $name = $request->name1,
                    $description = $request->description1
                ],
                [
                    $shortDescription = $request->shortdesc2,
                    $newsLang = $request->lang[2],
                    $name = $request->name2,
                    $description = $request->description2
                ],
            ];

            for ($i = 0; $i < 3; $i++) {
                try {
                    $post = News::create([
                        'news_id'                       => $product->id,
                        'slug'                          => $product->slug,
                        'lang'                          => $news[$i][1],
                        'title'                         => $news[$i][2],
                        'description1'                  => $news[$i][0],
                        'description2'                  => $news[$i][3],
                        'date'                          => Carbon::today(),
                        'status'                        => 'publish'
                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah News', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }


            Alert::success('Tambah News', 'Berhasil');
            return redirect()->route('news.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah News', 'error' . $th->getMessage());
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

        $news = NewsMain::where('id', '=', $id)->first();
        $newsDetail = News::where('news_id', '=', $id)->get();

        return view('admin.news.edit', compact('news', 'newsDetail'));
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
                'slug'                  =>  'required|string|unique:product_mains,slug',
                'name0'                 =>  'required',
                'description0'          =>  'required',
                'name1'                 =>  'required',
                'description1'          =>  'required',
                'name2'                 =>  'required',
                'description2'          =>  'required',
                'lang'                  =>  'required',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }
        // proses insert

        DB::beginTransaction();
        try {

            $post = NewsMain::whereId($id);

            $post->update([
                'title'         =>  $request->title,
                'slug'          =>  $request->slug,
            ]);
            
            DB::commit();
            $product = NewsMain::where('slug', '=', $request->slug)->first();


            $news = [
                [
                    $shortDescription = $request->shortdesc0,
                    $newsLang = $request->lang[0],
                    $name = $request->name0,
                    $description = $request->description0
                ],
                [
                    $shortDescription = $request->shortdesc1,
                    $newsLang = $request->lang[1],
                    $name = $request->name1,
                    $description = $request->description1
                ],
                [
                    $shortDescription = $request->shortdesc2,
                    $newsLang = $request->lang[2],
                    $name = $request->name2,
                    $description = $request->description2
                ],
            ];

            for ($i = 0; $i < 3; $i++) {
                try {
                    $post = News::where('news_id', '=', $id)->get();

                    $post[$i]->update([
                        'news_id'                       => $product->id,
                        'slug'                          => $product->slug,
                        'lang'                          => $news[$i][1],
                        'title'                         => $news[$i][2],
                        'description1'                  => $news[$i][0],
                        'description2'                  => $news[$i][3],
                        'date'                          => Carbon::today(),
                        'status'                        => 'publish'
                    ]);
                   
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah News', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }


            Alert::success('Edit News', 'Berhasil');
            return redirect()->route('news.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Edit News', 'error' . $th->getMessage());
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
        
        $product= News::where('news_id','=',$id)->get();

        $productMain = NewsMain::whereId($id);
        $productMain->delete();


        $product->map->delete();
        Alert::success('Hapus News', 'Berhasil');
        return redirect()->route('news.index');
    }
}
