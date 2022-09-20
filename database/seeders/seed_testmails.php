<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class seed_testmails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test0',
            'mail' => 'test0@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test1',
            'mail' => 'test1@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test2',
            'mail' => 'test2@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test3',
            'mail' => 'test3@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test4',
            'mail' => 'test4@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test5',
            'mail' => 'test5@m.aic.com'
        ]);
        DB::table('contacts')->insert([
            'baseID' => '1',
            'FName' => 'test6',
            'mail' => 'test6@m.aic.com'
        ]);

    }
}
