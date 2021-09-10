<?php

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
        DB::table('admins')->insert([
            'admin_id' => 'A002',
            'firstname' => 'Hakim',
            'lastname' => 'Hambali',
            'email' => 'hakimadmin@roketez.com',
            'password' => Hash::make('@dmin2'),
            'role' => 'Administrator',
        ]);
    }
}
