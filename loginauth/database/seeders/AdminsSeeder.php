<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name' => 'Viswajith',
            'email' => 'viswajith@admin.com',
            'mobile' => 1234567890,
            'password' => Hash::make('password'),
            'avatar' => 'vishwa.png'
        ]);

        DB::table('admins')->insert([
            'name' => 'Munib',
            'email' => 'munib@admin.com',
            'mobile' => 1234567809,
            'password' => Hash::make('password'),
            'avatar' => 'munib.png'
        ]);
    }
}
