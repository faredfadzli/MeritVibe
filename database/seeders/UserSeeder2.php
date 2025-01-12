<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder2 extends Seeder
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
                'spr_nama' => 'Azizah',
                'spr_nokp' => '021114060304',
                'ssm_matrik' => 'A22EM0018',
                'ssm_kursus' => 'SEMMH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Syuhada',
                'spr_nokp' => '030323040080',
                'ssm_matrik' => 'A22EC0253',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Sabrina',
                'spr_nokp' => '020110010188',
                'ssm_matrik' => 'A22EC0224',
                'ssm_kursus' => 'SECPH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Aliya',
                'spr_nokp' => '031106100862',
                'ssm_matrik' => 'A22ET0223',
                'ssm_kursus' => 'SETNH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Ain',
                'spr_nokp' => '040815030662',
                'ssm_matrik' => 'A23KT0176',
                'ssm_kursus' => 'SETNH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Aishah',
                'spr_nokp' => '031027060428',
                'ssm_matrik' => 'A22ET0255',
                'ssm_kursus' => 'SETGH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Fatin',
                'spr_nokp' => '030812101104',
                'ssm_matrik' => 'A22EM0073',
                'ssm_kursus' => 'SEMMH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Aliah',
                'spr_nokp' => '030726140676',
                'ssm_matrik' => 'A22EE0214',
                'ssm_kursus' => 'SEELH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Rao',
                'spr_nokp' => '030207011813',
                'ssm_matrik' => 'A22EC0274',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Dayah',
                'spr_nokp' => '030215011020',
                'ssm_matrik' => 'A22EC0246',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Syafiqah',
                'spr_nokp' => '020123110436',
                'ssm_matrik' => 'A22EC0276',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Nisa',
                'spr_nokp' => '030821010212',
                'ssm_matrik' => 'A22EC0173',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Afeqa',
                'spr_nokp' => '030531011356',
                'ssm_matrik' => 'A22EC0250',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Faiqah',
                'spr_nokp' => '030408100984',
                'ssm_matrik' => 'A22EC0095',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Syauqina',
                'spr_nokp' => '020111060080',
                'ssm_matrik' => 'A22EC0277',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Afiqah',
                'spr_nokp' => '030213010518',
                'ssm_matrik' => 'A22EC0239',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Syaza',
                'spr_nokp' => '030529050022',
                'ssm_matrik' => 'A22EC0278',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Intan',
                'spr_nokp' => '050317060016',
                'ssm_matrik' => 'A24KM0096',
                'ssm_kursus' => 'SEMMH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Arif',
                'spr_nokp' => '030411020557',
                'ssm_matrik' => 'A23KM0316',
                'ssm_kursus' => 'SEMMH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'spr_nama' => 'Hafiz',
                'spr_nokp' => '0330502080555',
                'ssm_matrik' => 'A22EC0196',
                'ssm_kursus' => 'SECVH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'spr_nama' => 'Zulaikha',
                'spr_nokp' => '030105050192',
                'ssm_matrik' => 'A22EC0271',
                'ssm_kursus' => 'SECBH',
                'is_profile_completed' => 0,
                'role' => '0',  // Admin role or any other role you want
                'remember_token' => null,  // Optional: Random token for "remember me" functionality
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ]);

    }
}
