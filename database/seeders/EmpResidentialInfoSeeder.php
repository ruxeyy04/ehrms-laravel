<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpResidentialInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_residential_infos')->insert([
            'id' => 26,
            'hrid' => 20240001,
            'region' => 'Region XI',
            'province' => 'Misamis Oriental',
            'barangay' => 'Barangay',
            'city' => 'Ozamis City',
            'street_name' => 'Street.',
            'house_block_no' => 'Block 1',
            'subdivision_village' => 'Village',
            'zipcode' => '7200',
            'country' => 'Philippines',
            'created_at' => '2024-04-02 13:05:11',
            'updated_at' => '2024-05-15 18:01:26',
        ]);
    }
}
