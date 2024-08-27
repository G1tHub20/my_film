<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            [
               'name' => 'test',
               'email' => 'test@test.com',
               'password' => Hash::make('password123'),
               'isAdmin' => 0,
               'created_at' => Now()
            ],
            [
               'name' => '太郎' ,
               'email' => 'taro@test.com' ,
               'password' => Hash::make('taro123pass'),
               'isAdmin' => 0,
               'created_at' => Now()
            ],
            [
               'name' => 'admin' ,
               'email' => 'admin@test.com' ,
               'password' => Hash::make('admin123'),
               'isAdmin' => 1,
               'created_at' => Now()
            ],
            [
               'name' => 'hanako' ,
               'email' => 'hanako@test.com' ,
               'password' => Hash::make('hanako123pass'),
               'isAdmin' => 0,
               'created_at' => Now()
            ],
        ]);
    }
}
