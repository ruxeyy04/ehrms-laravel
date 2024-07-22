<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpContactInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_contact_infos')->insert([
            'id' => 25,
            'hrid' => 20240001,
            'phone_number' => '0955-123-12345',
            'tel_num' => '(088) 555-3333',
            'personal_email' => 'systemadmin@gmail.com',
            'emergency_contact_name' => 'John Doe',
            'emergency_contact_no' => '09123456789',
            'emergency_email' => 'systemadmin@gmail.com',
            'created_at' => '2024-04-02 21:05:11',
            'updated_at' => '2024-05-15 18:01:25',
        ]);
    }
}
