<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'Сергей',
                    'middlename' => 'Сергеивич',
                    'lastname' => 'Сергов',
                    'login' => 'Sergo',
                    'password' => Hash::make('password123'),
                    'tel' => '32424324324',
                    'email' => 'sergo@gmail.com',
                    'email_verified_at' => now(),
                    'remember_token' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]
            ]
            );
    }
}
