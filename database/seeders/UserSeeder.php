<?php

namespace Database\Seeders;

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
        $max_record = 100;
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            
        ]);
        for($i=1;$i<=$max_record;$i++){
            DB::table('users')->insert([
                [
                    'name' => 'user'.$i,
                    'email' => 'user'.$i.'@example.com',
                    'email_verified_at' => now(),
                    'password' => Hash::make('password'),
                    'remember_token' => Str::random(100),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]);
        }
    }
}
