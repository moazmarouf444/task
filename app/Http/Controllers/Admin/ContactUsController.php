<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.contact_us.index', compact('messages'));
    }
    public function destroy($id) {
        Contact::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف رساله');

        return response(['id' => $id]);

    }
    public function show($id)
    {
        $message = Contact::findOrFail($id);
        return view('admin.contact_us.show',compact('message'));
    }

    public function reply(Request $request ,$id){
        Contact::findOrFail($id);
        auth('admin')->user()->replays()->create(['replay' => $request->replay , 'contact_id' => $id]);
        auth()->guard('admin')->user()->saveReport('رد علي رساله');
        return response()->json(['url' => route('admin.inbox.index')]) ;

    }

}
