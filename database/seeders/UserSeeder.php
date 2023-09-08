<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(

        [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
                'is_admin'=>'0',
               'password'=> bcrypt('123456'),
        ],
    );

    }
}
