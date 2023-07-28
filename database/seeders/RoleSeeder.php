<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        $admin->givePermissionTo('All');

        $operator = Role::create([
            'name' => 'operator',
            'guard_name' => 'web'
        ]);

        $operator->givePermissionTo(['Add', 'Update', 'Delete', 'Read']);


        $kadis = Role::create([
            'name' => 'kepala dinas',
            'guard_name' => 'web'
        ]);

        $kadis->givePermissionTo('Read');

        $kabupaten = Role::create([
            'name' => 'kabupaten',
            'guard_name' => 'web'
        ]);

        $kabupaten->givePermissionTo('Read City Only');
    }
}
