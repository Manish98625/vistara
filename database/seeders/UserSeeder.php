<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            array('id' => 1, 'name' => 'System Admin', 'email' => 'super_admin@admin.com','password' => \Hash::make('123'),),
        
        ]);

       
    }
}
