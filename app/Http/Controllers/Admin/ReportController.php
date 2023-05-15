<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::orderBy('created_at', 'desc')->get();
        $i = 1;
        $admins = Admin::select('id', 'name')->get();
        return view('admin.reports.index', compact('reports', 'i', 'admins'));
    }

    public function destroy($id)
    {
        Report::findOrFail($id)->delete();
        auth()->guard('admin')->user()->saveReport('حذف تقرير');

        return response(['id' => $id]);
    }

    public function destroySelected(Request $request)
    {
        $requestIds = (json_decode($request->data));
        Report::whereIn('id', $requestIds)->where('id', '!=', 1)->get()->each->delete();
        auth()->guard('admin')->user()->saveReport('حذف مجموعه من التقارير');

        return response()->json('success');


    }
}
