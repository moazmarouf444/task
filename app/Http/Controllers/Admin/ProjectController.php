<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Project\Store;
use App\Http\Requests\Admin\Project\Update;
use App\Models\Admin;
use App\Models\Project;
use App\Models\User;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    use ResponseTrait;

    public function index(){
        $projects = Project::all();
        $users = User::all();
        $admins = Admin::all();
        return view('admin.projects.index',compact('projects','users','admins'));
    }

    public function create(){
        $users = User::all();
        $admins = Admin::all();
        return view('admin.projects.create',compact('users','admins'));
    }

    public function store(Store $request){
        DB::beginTransaction();
        try{
            Project::create($request->validated());
            DB::commit();
            return (['response' => 'success', 'url' => route('admin.projects.index')]);
        }catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with(['error' => 'هناك خطا ما ']);
        }

    }

    public function edit($id) {
        $project = Project::findOrFail($id);
        $users = User::all();
        $admins = Admin::all();
        return view('admin.projects.edit',compact('project','users','admins'));
    }

    public function update(Update $request,$id){
        DB::beginTransaction();
        try{
            Project::findOrFail($id)->update($request->validated());
            DB::commit();
            return (['response' => 'success', 'url' => route('admin.projects.index')]);
        }catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with(['error' => 'هناك خطا ما ']);
        }

    }
    public function show($id){
        $project = Project::findOrFail($id);
        $users = User::all();
        $admins = Admin::all();

        return view('admin.projects.show',compact('project','users','admins'));

    }
    public function destroy($id) {
        Project::findOrFail($id)->delete();
        return response(['id' => $id]);

    }
    public function destroySelected(Request $request) {
        $requestIds = (json_decode($request->data));
        Project::whereIn('id', $requestIds)->get()->each->delete();
        auth()->guard('admin')->user()->saveReport(' حذف مجموعه من المشاريع ');

        return response()->json('success');
        //return response()->json('failed');
    }
}
