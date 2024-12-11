<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'spr_nama' => 'DEE',
                'spr_nokp' => '040718140317',
                'ssm_matrik' => 'A23KA0025',
                'ssm_kursus' => 'SEEFR',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'fawwaz',
                'spr_nokp' => '030710080015',
                'ssm_matrik' => 'A22EC0210',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 1,
                'role' => '1',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
