<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'kps',
            'email' => 'kps@gmail.com',
            'password' => bcrypt('1234567'), // Pastikan password di-hash
        ]);
    }
}
