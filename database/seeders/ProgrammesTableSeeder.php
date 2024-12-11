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
                'prog_name' => 'Workshop on Laravel',
                'prog_date' => '2024-12-20',
                'prog_time' => '10:00',
                'prog_place' => 'Main Hall',
                'prog_poster' => null, // Add a path to a poster if needed
                'prog_managed_by' => 'IT Department',
                'prog_pic_name' => 'John Doe',
                'prog_pic_email' => 'johndoe@example.com',
                'prog_pic_tel' => '0123456789',
                'createdBy' => 1, // Replace with a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'prog_name' => 'Python Bootcamp',
                'prog_date' => '2024-12-22',
                'prog_time' => '14:00',
                'prog_place' => 'Computer Lab',
                'prog_poster' => null,
                'prog_managed_by' => 'CS Department',
                'prog_pic_name' => 'Jane Smith',
                'prog_pic_email' => 'janesmith@example.com',
                'prog_pic_tel' => '0987654321',
                'createdBy' => 1, // Replace with a valid user ID
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
