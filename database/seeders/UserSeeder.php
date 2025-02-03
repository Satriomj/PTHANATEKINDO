<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'user_email' => 'user@user.com',
            'user_fullname' => 'User1',
            'user_status' => 1,
            'password' => Hash::make('password123'),
        ]);
        User::create([
            'user_email' => 'user@user2.com',
            'user_fullname' => 'User2',
            'user_status' => 1,
            'password' => Hash::make('password123'), 
        ]);
        User::create([
            'user_email' => 'user@user3.com',
            'user_fullname' => 'User3',
            'user_status' => 1,
            'password' => Hash::make('password123'), 
        ]);
        User::create([
            'user_email' => 'user@user4.com',
            'user_fullname' => 'User4',
            'user_status' => 0,
            'password' => Hash::make('password123'), 
        ]);
        User::create([
            'user_email' => 'user@user5.com',
            'user_fullname' => 'User5',
            'user_status' => 0,
            'password' => Hash::make('password123'), 
        ]);
    }
}
