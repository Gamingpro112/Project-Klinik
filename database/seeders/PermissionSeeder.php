<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create([
            'name' => 'All',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Add',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Update',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Delete',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Read',
            'guard_name' => 'web'
        ]);

        Permission::create([
            'name' => 'Read City Only',
            'guard_name' => 'web'
        ]);
    }
}
