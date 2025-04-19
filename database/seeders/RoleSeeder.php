<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $max_record = 100;
        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'manager',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'leader',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('roles')->insert([
            [
                'name' => 'member',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
