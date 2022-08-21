<?php

namespace Database\Seeders;

use App\Models\Permission;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $webPermission = collect([
            # Dashboard related permission
            ['name' => 'read-dashboards', 'label' => 'Baca Dashboard'],
            # Roles related permission
            ['name' => 'read-roles', 'label' => 'Baca Role'],
            ['name' => 'create-roles', 'label' => 'Buat Role'],
            ['name' => 'update-roles', 'label' => 'Update Role'],
            ['name' => 'delete-roles', 'label' => 'Hapus Role'],
            ['name' => 'change-permissions', 'label' => 'Edit Hak Akses'],
            # Employee related permission
            ['name' => 'read-employees', 'label' => 'Baca Staff'],
            ['name' => 'create-employees', 'label' => 'Buat Staff'],
            ['name' => 'update-employees', 'label' => 'Update Staff'],
            ['name' => 'delete-employees', 'label' => 'Hapus Staff'],
            # Employee type related permission
            ['name' => 'read-employee-types', 'label' => 'Baca Jenis Staff'],
            ['name' => 'create-employee-types', 'label' => 'Buat Jenis Staff'],
            ['name' => 'update-employee-types', 'label' => 'Update Jenis Staff'],
            ['name' => 'delete-employee-types', 'label' => 'Hapus Jenis Staff'],

            # Users related permission
            ['name' => 'read-users', 'label' => 'Baca User'],
            ['name' => 'create-users', 'label' => 'Buat User'],
            ['name' => 'update-users', 'label' => 'Edit User'],
            ['name' => 'delete-users', 'label' => 'Hapus User'],
        ]);

        $this->insertPermission($webPermission);
    }

    private function insertPermission(Collection $permissions, $guardName = 'web')
    {
        Permission::insert($permissions->map(function ($permission) use ($guardName) {
            return [
                'name' => $permission['name'],
                'display_name' => $permission['label'],
                'guard_name' => $guardName,
                'created_at' => Carbon::now()
            ];
        })->toArray());
    }
}
