<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class seed_admin_user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id'=>99,
            'name'=>'admin',
            'email'=>'send@m.aic.com',
            'password'=>'$2y$10$YjsKWHZzqaQ8t458g7q0wu0E2KCbjNvpHgSE4TGbD1RQmPnnScU4S'
        ]);
        DB::table('users')->insert([
            'id'=>100,
            'name'=>'reguser',
            'email'=>'test1@m.aic.com',
            'password'=>Hash::make('mypassword')
        ]);
        DB::table('bases')->insert([
            'user_id'=>99,
            'name'=>'mynewbase',
            'is_deleted'=>false
        ]);
        DB::table('bases')->insert([
            'user_id'=>100,
            'name'=>'mynewbase3'
        ]);
        DB::table('bases')->insert([
            'user_id'=>100,
            'name'=>'mynewbase4'
        ]);
        DB::table('bases')->insert([
            'user_id'=>100,
            'name'=>'mynewbase5'
        ]);
    }
}
