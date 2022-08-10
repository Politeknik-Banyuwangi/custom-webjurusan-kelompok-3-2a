<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $developer = Role::create([
            'name' => 'Developer'
        ]);
        $adminsitrator = Role::create([
            'name' => 'Administrator'
        ]);

        // Give permission to role
        $developer->givePermissionTo([
            'read-dashboards',
        ]);
        $adminsitrator->givePermissionTo([
            'read-dashboards',
        ]);
    }
}
