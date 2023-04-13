<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// use users
use App\Models\User;
// use Hash
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // user seeder
        User::create([
            'name' => 'Jane Doe',
            'email' => 'jane@doe.com',
            'user_type' => '2',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'Jessica Doe',
            'email' => 'jessica@doe.com',
            'user_type' => '3',
            'password' => Hash::make('password'),
        ]);
        User::create([
            'name' => 'John Doe',
            'email' => 'john@doe.com',
            'user_type' => '4',
            'password' => Hash::make('password'),
        ]);
    }
}
