<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Users\Store;
use App\Http\Requests\Admin\Users\Update;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;

class UserController extends Controller
{
    use ResponseTrait;

    public function index(){
        $users = User::all();
        return view('admin.users.index',compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Store $request){
       User::create($request->validated());
        return (['response' => 'success', 'url' => route('admin.users.index')]);
    }

    public function edit($id) {
        $user = User::findOrFail($id);
        return view('admin.users.edit', ['user' => $user]);
    }

    public function update(Update $request,$id){
        User::findOrFail($id)->update($request->validated());
        return (['response' => 'success', 'url' => route('admin.users.index')]);
    }
    public function show($id){
        $user = User::findOrFail($id);
        return view('admin.users.show', ['user' => $user]);

    }
    public function destroy($id) {
        User::findOrFail($id)->delete();
        return response(['id' => $id]);

    }
    public function destroySelected(Request $request) {
        $requestIds = (json_decode($request->data));
        User::whereIn('id', $requestIds)->where('id', '!=', 1)->get()->each->delete();
        auth()->guard('admin')->user()->saveReport(' حذف مجموعه من العملاء ');

        return response()->json('success');
        //return response()->json('failed');
    }
}
