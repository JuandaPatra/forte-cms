<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Alert;
use App\Models\about;
use App\Models\aboutMain;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $check = about::all()->count();
        $data = [
            'en',
            'ja',
            'ru'
        ];

        if ($check <= 0) {
            DB::beginTransaction();
            try {


                for ($i = 0; $i < 3; $i++) {
                    try {
                        $post = about::create([
                            'about_id'                      =>  $i,
                            'lang'                          =>  $data[$i],
                        ]);
                    } catch (\throwable $th) {
                        DB::rollBack();
                        Alert::error('Tambah Product', 'error' . $th->getMessage());
                        return redirect()->back()->withInput($request->all());
                    } finally {
                        DB::commit();
                    }
                }


                // Alert::success('Tambah About', 'Berhasil');
                return redirect()->route('about.index');
            } catch (\throwable $th) {
                DB::rollBack();
                // Alert::error('Tambah about', 'error' . $th->getMessage());
                return redirect()->back()->withInput($request->all());
            } finally {
                DB::commit();
            }
        }

        $about = about::all();
        return view('admin.about.create', compact('about'));
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

        $validator = Validator::make(
            $request->all(),
            [
                'description0'          =>  'required',
                'description1'          =>  'required',
                'description2'          =>  'required',
                'description3'          =>  'required',
                'description4'          =>  'required',
                'description5'          =>  'required',
                'description6'          =>  'required',
                'description7'          =>  'required',
                'description8'          =>  'required',
                'description9'          =>  'required',
                'description10'          =>  'required',
                'description11'          =>  'required',
                
            ]
        );


        if ($validator->fails()) {
            return redirect()->back()->withInput($request->all())->withErrors($validator);
        }


        $aboutEnglish = [
            'en',
            $request->description0,
            $request->description1,
            $request->description2,
            $request->description3,
            $request->about_id[0]
        ];

        $aboutJapan = [
            'ja',
            $request->description4,
            $request->description5,
            $request->description6,
            $request->description7,
            $request->about_id[1]

        ];

        $aboutRussia = [
            'ru',
            $request->description8,
            $request->description9,
            $request->description10,
            $request->description11,
            $request->about_id[2]

        ];

        $data = [$aboutEnglish, $aboutJapan, $aboutRussia];

        DB::beginTransaction();
        try {

            for ($i = 0; $i < 3; $i++) {
                try {
                    $abouts = about::where('id', '=', $data[$i][5]);
                    $post = $abouts->update([
                        'lang'                          =>  $data[$i][0],
                        'description1'                  =>  $data[$i][1],
                        'description2'                   =>  $data[$i][2],
                        'description3'                   =>  $data[$i][3],
                        'description4'                   =>  $data[$i][4],

                    ]);
                } catch (\throwable $th) {
                    DB::rollBack();
                    Alert::error('Tambah Product', 'error' . $th->getMessage());
                    return redirect()->back()->withInput($request->all());
                } finally {
                    DB::commit();
                }
            }


            Alert::success('Tambah About', 'Berhasil');
            return redirect()->route('about.index');
        } catch (\throwable $th) {
            DB::rollBack();
            Alert::error('Tambah about', 'error' . $th->getMessage());
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
        return $request;
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
