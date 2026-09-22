<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::UpdateorCreate(
            ['email' => 'admin2@gmail.com'],
            [
            'name' => 'Admin2345',
            'email' => 'admin2@gmail.com',
            'password' => '67890',
        ]);
    }
}