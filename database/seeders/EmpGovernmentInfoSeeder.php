<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpGovernmentInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_government_infos')->insert([
            'id' => 3,
            'hrid' => 20240001,
            'prc_no' => NULL,
            'sss_id' => NULL,
            'gsis_bp_no' => NULL,
            'tin_no' => NULL,
            'philhealth_id' => NULL,
            'pag_ibig_id' => NULL,
            'gsis_id' => NULL,
            'agency_employee_no' => NULL,
            'created_at' => '2024-05-12 23:06:44',
            'updated_at' => '2024-05-13 18:52:05',
        ]);
    }
}
