<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpFamilyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_family_infos')->insert([
            'id' => 3,
            'hrid' => 20240001,
            'relationship' => 'Child',
            'first_name' => 'John',
            'middle_name' => NULL,
            'last_name' => 'asdf',
            'extension' => NULL,
            'birthdate' => '2024-05-17',
            'occupation' => NULL,
            'employer_name' => NULL,
            'business_add' => NULL,
            'telephone_number' => NULL,
            'deceased' => NULL,
            'created_at' => '2024-05-16 22:31:18',
            'updated_at' => '2024-05-16 22:31:18',
        ]);
    }
}
