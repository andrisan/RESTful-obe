<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Catherine',
                'email' => 'vanicatherine05@gmail.com',
                'password' => 'password'
            ]
        );
        User::create(
            [
                'name' => 'Test',
                'email' => 'test@siobe.com',
                'password' => 'password'
            ]
        );
    }
}
