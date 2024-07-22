<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpOrgPosInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_org_pos_infos')->insert([
            'id' => 20,
            'hrid' => 20240001,
            'office_id' => 1,
            'department_id' => 100101,
            'job_id' => 1,
            'division_code' => NULL,
            'station_code' => NULL,
            'business_code' => 1001,
            'created_at' => '2024-04-02 05:05:11',
            'updated_at' => '2024-04-30 04:46:42',
        ]);
    }
}
