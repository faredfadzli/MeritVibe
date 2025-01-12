<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder3 extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'spr_nama' => 'Syahirah',
                'spr_nokp' => '030306140434',
                'ssm_matrik' => 'A22EB0076',
                'ssm_kursus' => 'SEBBH',
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
            [
                'spr_nama' => 'Nurin',
                'spr_nokp' => '030416080698',
                'ssm_matrik' => 'A22BS0107',
                'ssm_kursus' => 'SBSDH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'Sofea',
                'spr_nokp' => '020901030388',
                'ssm_matrik' => 'A21EB0073',
                'ssm_kursus' => 'SEBBH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'Aina',
                'spr_nokp' => '030805100218',
                'ssm_matrik' => 'A22HM0030',
                'ssm_kursus' => 'SHMRH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'Izni',
                'spr_nokp' => '031022010050',
                'ssm_matrik' => 'A22ET0088',
                'ssm_kursus' => 'SETKH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'Aqil',
                'spr_nokp' => '030210100315',
                'ssm_matrik' => 'A22EE0147',
                'ssm_kursus' => 'SEEEH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],
            [
                'spr_nama' => 'Amir',
                'spr_nokp' => '031013050093',
                'ssm_matrik' => 'A22BE0171',
                'ssm_kursus' => 'SBEGH',
                'is_profile_completed' => false,
                'role' => '0', // Adjust role as needed
                'remember_token' => null,
                'created_at' => now(), // Automatically sets the current timestamp
                'updated_at' => now(), // Automatically sets the current timestamp
            ],

        ]);

    }
}
