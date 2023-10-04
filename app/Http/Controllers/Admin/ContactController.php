<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ContactsExport;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use DataTables;
use Maatwebsite\Excel\Facades\Excel;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at', 'DESC')->get();
        // return $contacts;
        return view('admin.contact.index', compact('contacts'));
    }

    public function messages(Request $request)
    {
        if ($request->ajax()) {
            $data = Contact::orderBy('created_at', 'DESC')->get();
            
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('date', function ($row) {
                    $date = date("d/m/Y", strtotime($row->created_at));
                    return $date;
                })
                ->addColumn('mes', function ($row) {
                    $date = $row->message;
                    return $date;
                })
                
                ->make(true);

        }
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
        // return $id;

        $contact = Contact::where('id', '=', $id)->first();


        return view('admin.contact.detail', compact('contact'));
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

    public function export()
    {

        	return Excel::download(new ContactsExport, 'contact.xlsx');
    }
}
