<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Users::create([
            // 'name' => 'Администратор',
            'role' => 'преподаватель',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456')
        ]);
    }
}