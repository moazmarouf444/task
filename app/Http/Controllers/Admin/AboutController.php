<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\About;
use App\Models\SiteSetting;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use UploadTrait;

    public function index()
    {
        $setting = SiteSetting::all()->pluck('value', 'key');
        return view('admin.settings.about', compact('setting'));
    }
    public function updateAbout(About $request)
    {
        $settings = $request->validated();
        auth()->guard('admin')->user()->saveReport(' تحديث عن الشركه ');

        if ($request->has('about_image')) {
            $settings['about_image'] = $this->uploadAllTyps($request['about_image'], 'settings');
        }
        if ($request->has('message_image')) {
            $settings['message_image'] = $this->uploadAllTyps($request['message_image'], 'settings');
        }
        if ($request->has('vision_image')) {
            $settings['vision_image'] = $this->uploadAllTyps($request['vision_image'], 'settings');
        }
        if ($request->has('motto_image')) {
            $settings['motto_image'] = $this->uploadAllTyps($request['motto_image'], 'settings');
        }

        foreach ($settings as $key => $value) {
            $setting = SiteSetting::where('key', $key)->first();
            ($setting) ? $setting->update(['value' => $value]) : SiteSetting::create(['key' => $key, 'value' => $value]);

        }
        return (['response' => 'success', 'url' => route('admin.about.index')]);

    }

}
