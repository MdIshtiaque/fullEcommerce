<?php

namespace Database\Seeders\Admin;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminCredentialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Md Emon',
            'email' => 'ishtiaqueferdous109@gmail.com',
            'password' => bcrypt('12345678'),
            'is_admin' => true,
            'role' => User::USER_ADMIN
        ]);

        User::create([
            'name' => 'Md Stark',
            'email' => 'moderator@admin.com',
            'password' => bcrypt('12345678'),
            'is_admin' => false,
            'role' => User::USER_MODERATOR
        ]);
    }
}
