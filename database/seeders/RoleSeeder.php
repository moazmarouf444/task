<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Traits\PermissionTrait;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    use PermissionTrait;

    private $roles = [
        ['name' => ['ar' => 'محاسب', 'en' => 'Accountant']],
    ];

    public function run()
    {
        foreach ($this->roles as $role) {
            Role::updateOrCreate([
                'name->en' => $role["name"]['en']
            ], $role);
        }

        $adminRole = Role::first();

        $superPermissions = $this->getAll();
        foreach ($superPermissions as $superPermission) {
            foreach ($superPermission['childrens'] as $permission) {
                Permission::updateOrCreate(
                    [
                        'name' => $permission,
                    ], [
                    'name'    => $permission,
                    'role_id' => $adminRole->id
                ]);
            }
        }
    }
}
