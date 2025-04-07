<?php

namespace Database\Seeders;
 

use App\Enum\UserRole;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => Hash::make('123456'),
        'role' => UserRole::ADMIN,
     ]);       
}
}