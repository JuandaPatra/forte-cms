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
use App\Rules\wordCount;
use Illuminate\Support\Facades\Mail;

class contactApiController extends Controller
{
    public function store(Request $request)
    {

        // $request['name'] = strip_tags($request->name);
        // $request['email'] = strip_tags($request->email);
        // $request['message'] = strip_tags($request->message);

        // $tes = $request->message;


        // if(count(explode(' ', $tes)) > 160)
        // return 'more than 160 words';
        $validator = Validator::make(
            $request->all(),
            [
                'name'      => 'required|string|max:100',
                'email'      => 'required|string|email|max:100',
                'country'    => 'required|string|max:100',
                'message'      => 'required|string|max:1000',
                // 'message'    => ['required', new wordCount(160)]

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

       $email = [
        'emailReceiver' => 'patrajuanda10@gmail.com',
        'emailSender'   => '*@fortecig.id',
        'name'      => $request->name,
        'email'      => $request->email,
        'country'    => $request->country,
        'message'      => $request->message,

       ];

        Mail::send('admin.emails.contact', $email, function ($message) use ($email,) {
            $message->from($email['emailSender']);
            $message->to($email['emailReceiver']);
            $message->subject('New Contact Detail' . $email['name']);
        });


       
        return ApiFormatter::createApi(200, 'success', $data = [
            'status' => 'success',
        ]);
    }
}
