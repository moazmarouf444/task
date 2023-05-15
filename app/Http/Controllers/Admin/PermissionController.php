<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePermissionRequest;
use App\Models\Role;
use App\Models\Permission;
use App\Traits\HasResponse;
use App\Traits\PermissionTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PermissionController extends Controller
{
    use HasResponse, PermissionTrait;

    public function index()
    {
        $roles = Role::latest()->paginate(2);

        return view('admin.permissions.index', compact('roles'));
    }

    public function show(Role $role)
    {
        $role->load('permissions');
        $superPermissions = self::getAll();
        $roleUserPermissions = $role->permissions->pluck('name')->toArray();

        return view('admin.permissions.show', compact('role', 'superPermissions', 'roleUserPermissions'));
    }

    public function create()
    {
        $superPermissions = self::getAll();
        $roles = Role::latest()->get();

        return view('admin.permissions.create', compact('roles', 'superPermissions'));
    }

    public function store(StorePermissionRequest $request)
    {
        $role = Role::create($request->validated());

        $request->permissions = $request->permissions ?? [];
        foreach ($request->permissions as $permission) {
            Permission::create([
                'name' => $permission,
                'role_id' => $role->id
            ]);
        }

        return (['response' => 'success', 'url' => route('admin.permissions.index')]);

    }

    public function edit(Role $role)
    {
        $role->load('permissions');
        $superPermissions = self::getAll();
        $roleUserPermissions = $role->permissions->pluck('name')->toArray();

        return view('admin.permissions.edit', compact('role', 'superPermissions', 'roleUserPermissions'));
    }

    public function update(Role $role, StorePermissionRequest $request)
    {
        $role->update($request->validated());

        $request->permissions = $request->permissions ?? [];
        $removedPermissions = array_diff($role->permissions->pluck('name')->toArray(), $request->permissions);
        $addedPermissions = array_diff($request->permissions, $role->permissions->pluck('name')->toArray());

        DB::table('permissions')
            ->where('role_id', $role->id)->whereIn('name', $removedPermissions)->delete();
        Cache::forget('authPermissions');

        foreach ($addedPermissions as $permission) {
            Permission::create([
                'name' => $permission,
                'role_id' => $role->id
            ]);
        }

        return (['response' => 'success', 'url' => route('admin.permissions.index')]);

    }

    public function destroy(Role $role)
    {
        // return self::failReturn('لا يمكن حذف الصلاحية لوجود مستخدمين بها ');

        foreach ($role->permissions as $permission)
            $permission->delete();

        $role->delete();

        return self::successReturn(__('dashboard.alerts.deleted'));
    }

    public function destroySelected(Request $request)
    {
        $ids = $request->roles;
        $roles = Role::find($ids);
        foreach ($roles as $role) {
            foreach ($role->permissions as $permission)
                $permission->delete();

            $role->delete();
        }

        return self::successReturn(__('dashboard.alerts.deleted'));
    }

}
