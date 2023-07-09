<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            // [
            //     'name' => 'Expert College',
            //     'email' => 'admin@example.com',
            //     'password' => Hash::make('password'),
            //     'user_type' => "1"
            // ],
            // [
            //     'name' => 'Aunty Jane',
            //     'email' => 'teacher@example.com',
            //     'password' => Hash::make('password'),
            //     'user_type' => "2"
            // ],
            // [
            //     'name' => 'Joshua Edwin',
            //     'email' => 'student@example.com',
            //     'password' => Hash::make('password'),
            //     'user_type' => "3"
            // ],
            // [
            //     'name' => 'Doctor Michael',
            //     'email' => 'parent@example.com',
            //     'password' => Hash::make('password'),
            //     'user_type' => "4"
            // ]
        );
    }
}
