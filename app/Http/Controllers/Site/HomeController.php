<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Advantage;
use App\Models\Contact;
use App\Models\Service;
use App\Models\SiteSetting;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index(){
        $settings = SiteSetting::all()->pluck('value', 'key');
        $advantages = Advantage::take(4)->get();
        $services = Service::take(5)->get();
        $socials = Social::take(5)->get();
        return view('site.index',compact('settings','advantages','services','socials'));
    }

    public function contactUs(Request $request){
        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'phone'=>'required|min:9|max:11',
            'email'=>'required|email',
            'message' => 'required',
        ]);
        if($validator->passes()){
            Contact::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'phone' => $request['phone'],
                'message' => $request['message'],
            ]);
            $msg  = route('site.index');
            return response()->json([
                'key' => 'success',
                'msg' => $msg
            ]);
        }else {
            foreach ((array)$validator->errors() as $key => $value) {
                foreach ($value as $msg) {
                    return response()->json(['key' => 'fail', 'msg' => $msg[0]]);
                }
            }
        }
    }

    /***************** change lang  *****************/
    public function changeLanguage($language)
    {
        app()->setLocale($language);
        session()->put('lang', $language);
        return back();
    }
}
