<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'uuid' => Str::uuid(),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin123',
            'password' => Hash::make('admin123'),
        ]);

        $admin->assignRole('admin');
    }
}
