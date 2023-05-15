<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Task\Store;
use App\Http\Requests\Admin\Task\Update;
use App\Models\Project;
use App\Models\Task;
use App\Traits\ResponseTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    use ResponseTrait;

    public function index(){
        $projects = Project::all();
        $tasks = Task::all();
        return view('admin.tasks.index',compact('projects','tasks'));
    }

    public function create(){
        $projects = Project::all();
        return view('admin.tasks.create',compact('projects'));
    }

    public function store(Store $request){
        DB::beginTransaction();
        try{
            Task::create($request->validated());
            DB::commit();
            return (['response' => 'success', 'url' => route('admin.tasks.index')]);
        }catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with(['error' => 'هناك خطا ما ']);
        }

    }

    public function edit($id) {
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('admin.tasks.edit',compact('task','projects'));
    }

    public function update(Update $request,$id){
        DB::beginTransaction();
        try{
            Task::findOrFail($id)->update($request->validated());
            DB::commit();
            return (['response' => 'success', 'url' => route('admin.tasks.index')]);

        }catch (\Exception $ex){
            DB::rollBack();
            return redirect()->back()->with(['error' => 'هناك خطا ما ']);
        }

    }
    public function show($id){
        $task = Task::findOrFail($id);
        $projects = Project::all();
        return view('admin.tasks.show',compact('task','projects'));

    }
    public function destroy($id) {
        Task::findOrFail($id)->delete();
        return response(['id' => $id]);

    }
    public function destroySelected(Request $request) {
        $requestIds = (json_decode($request->data));
        Task::whereIn('id', $requestIds)->get()->each->delete();
        auth()->guard('admin')->user()->saveReport(' حذف مجموعه من المهام ');

        return response()->json('success');
        //return response()->json('failed');
    }
}
