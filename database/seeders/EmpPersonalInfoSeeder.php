<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpPersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_personal_infos')->insert([
            'id' => 30,
            'hrid' => 20240001,
            'prefix_name' => 'Mr.',
            'suffix_name' => 'None',
            'gender' => 'Male',
            'civil_status' => 'N/A',
            'citizenship' => 'Filipino',
            'dual_citizenship' => 'N/A',
            'birthdate' => '2001-01-01',
            'birthplace' => 'Birth Place',
            'blood_type' => 'O+',
            'e_signature' => NULL,
            'years_of_experience' => 6,
            'created_at' => '2024-04-02 21:05:11',
            'updated_at' => '2024-05-13 18:52:05',
            'height' => '100',
            'weight' => '123456',
        ]);
    }
}
