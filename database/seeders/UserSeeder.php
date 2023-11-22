<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin
        User::create([
            'fname' => 'Im',
            'lname' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'type' => 'admin'
        ]);

        // User
        User::create([
            'fname' => 'Im',
            'lname' => 'User',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'type' => 'user'
        ]);

        // Teacher
        User::create([
            'fname' => 'Im',
            'lname' => 'Teacher',
            'email' => 'teacher@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'type' => 'teacher'
        ]);

        // Student
        User::create([
            'fname' => 'Im',
            'lname' => 'Student',
            'email' => 'student@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'type' => 'student'
        ]);
    }
}
