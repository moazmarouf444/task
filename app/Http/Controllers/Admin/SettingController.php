<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Setting\About;
use App\Http\Requests\Admin\Setting\Update;
use App\Models\SiteSetting;
use App\Traits\UploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use UploadTrait;
    public function index()
    {
        $setting = SiteSetting::all()->pluck('value', 'key');
        return view('admin.settings.index', compact('setting'));
    }



    public function update(Update $request)
    {
        $settings = $request->all();
        if ($request->has('logo')) {
            $settings['logo'] = $this->uploadAllTyps($request['logo'], 'settings');
        }

        foreach ($settings as $key => $value) {
            $setting = SiteSetting::where('key', $key)->first();
            ($setting) ? $setting->update(['value' => $value]) : SiteSetting::create(['key' => $key, 'value' => $value]);

        }
        auth()->guard('admin')->user()->saveReport(' تحديث الاعدادات');

        return (['response' => 'success', 'url' => route('admin.dashboard.index')]);
    }




}

