<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Add users here
        DB::table('users')->insert([

            'name' => 'Trevor Allain',
            'username' => 'tallain',
            'email' => 'tallain88@gmail.com',
            'password' => Hash::make('password')
        ]);

    }
}
