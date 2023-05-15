<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Admins\Store;
use App\Http\Requests\Admin\Admins\Update;
use App\Models\Admin;
use App\Models\Role;
use App\Traits\ReportTrait;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class AdminController extends Controller
{
    use ResponseTrait;

    public function index(){
        $admins = Admin::all();
        return view('admin.admins.index',compact('admins'));
    }

    public function create(){
        $roles = Role::all();
        return view('admin.admins.create',compact('roles'));
    }

    public function store(Store $request){
        Admin::create($request->validated());
        auth()->guard('admin')->user()->saveReport('اضافه مشرف');

        return (['response' => 'success', 'url' => route('admin.admins.index')]);
    }

    public function edit($id) {
        $admin = Admin::findOrFail($id);
        $roles = Role::all();
        return view('admin.admins.edit',compact('admin','roles'));
    }

    public function update($id,Update $request){
        Admin::findOrFail($id)->update($request->validated());
        auth()->guard('admin')->user()->saveReport(' تعديل مشرف');
        return (['response' => 'success', 'url' => route('admin.admins.index')]);
    }
    public function show($id){
        $admin = Admin::findOrFail($id);
        $roles = Role::all();
        return view('admin.admins.show',compact('admin','roles'));

    }
    public function destroy($id) {
        Admin::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport(' حذف مشرف');

        return response(['id' => $id]);

    }
    public function destroySelected(Request $request) {
        $requestIds = (json_decode($request->data));
        Admin::whereIn('id', $requestIds)->where('id', '!=', 1)->get()->each->delete();
        auth()->guard('admin')->user()->saveReport(' حذف مجموعه من المشرفين');

        return response()->json('success');
        //return response()->json('failed');
    }
}
