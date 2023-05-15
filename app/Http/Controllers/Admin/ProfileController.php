<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Profile\Update;
use App\Models\Admin;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(){
        $admin = auth()->guard('admin')->user();
        return view('admin.profile.edit',compact('admin'));
    }

    public function update(Update $request){
        $admin = auth()->guard('admin')->user();
        $admin->saveReport('تعديل ملفه الشخصي');
        $admin->update($request->validated());
        return (['response' => 'success', 'url' => route('admin.dashboard.index')]);
    }
}
