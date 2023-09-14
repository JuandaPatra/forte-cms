<?php

namespace App\Http\Controllers\API;

use App\helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Contact;
use App\Models\News;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class contactApiController extends Controller
{
    public function store(Request $request)
    {

        $request['name'] = strip_tags($request->name);
        $request['email'] = strip_tags($request->email);
        $request['message'] = strip_tags($request->message);
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string|max:100',
                'email'      => 'required|string|email|max:100',
                'country'    => 'required|string|max:100',
                'message'      => 'required|string|max:1000',

            ]
        );
        if ($validator->fails()) {
            return ApiFormatter::createApi(
                400,
                'failed',
                [
                    'oldDatas' => $request->all(),
                    'error' => $validator->errors()
                ]
            );
        }
        DB::beginTransaction();

        try {
            $newMessage = Contact::create([
                'name'      => $request->name,
                'email'      => $request->email,
                'country'    => $request->country,
                'message'      => $request->message,
            ]);
        } catch (\throwable $th) {
            DB::rollBack();
            return ApiFormatter::createApi(
                400,
                'failed',
                $request->all()
            );
        } finally {
            DB::commit();
        }


       
        return ApiFormatter::createApi(200, 'success', $data = [
            'status' => 'success',
        ]);
    }
}
