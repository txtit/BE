<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_admin' => true,
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'is_admin' => true,
        ]);
    }
}
