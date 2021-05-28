<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'panggi',
            'email' => 'panggi@.com',
            'password' => Hash::make('12345')
        ]);

        DB::table('users')->insert([
            'name' => 'sapah',
            'email' => 'sapah@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
