<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HrUserinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hr_userinfos')->insert([
            'hrid' => '20240001',
            'employee_no' => NULL,
            'personal_email' => 'systemadmin@gmail.com',
            'deped_email' => 'juan.cruz@deped.gov.ph',
            'password' => Hash::make('1234'),
            'first_name' => 'Juan',
            'midname' => '',
            'last_name' => 'Cruz',
            'profile_img' => 'defaultimg.jpg',
            'employment_date' => '2024-02-15',
            'dateof_leaving' => NULL,
            'employment_status' => '1',
            'mode_of_employment' => 'Direct',
            'role_id' => 5,
            'salary_id' => 643,
            'remember_token' => NULL,
            'status' => 'Active',
            'max_size_storage' => 1000,
            'max_file_upload_size' => 50000000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
