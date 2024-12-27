<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgrammesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('programmes')->insert([
            [
                'prog_name' => 'C0SC024',
                'prog_date' => '2024-11-05',
                'prog_time' => '8:00',
                'prog_place' => 'DEWAN SRI RESAK,KTDI',
                'prog_poster' => null, // Add a path to a poster if needed
                'prog_managed_by' => 'JKM KTDI SESI 24/25',
                'prog_pic_name' => 'Muhammad',
                'prog_pic_email' => 'muhammad@example.com',
                'prog_pic_tel' => '0123456789',
                'prog_default_point' => '3',
                'createdBy' => 1, // Replace with a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prog_name' => 'UTM GAMES',
                'prog_date' => '2024-11-07',
                'prog_time' => '8:00',
                'prog_place' => 'SPORT HALL,UTM',
                'prog_poster' => null,
                'prog_managed_by' => 'UTM',
                'prog_pic_name' => 'Ali',
                'prog_pic_email' => 'ali@example.com',
                'prog_pic_tel' => '0987654321',
                'prog_default_point' => '3',
                'createdBy' => 1, // Replace with a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
