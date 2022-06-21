<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'     => 1,
            'name'     => 'Super Admin',
            'address'     => 'Demo Address',
            'phone'     => '+2468843342',
            'email'    => 'admin@mail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
