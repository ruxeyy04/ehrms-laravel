<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmpAddressInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emp_address_infos')->insert([
            'id' => 26,
            'hrid' => 20240001,
            'region' => 'Region X',
            'province' => 'Misamis Occidental',
            'barangay' => 'Aguada',
            'city' => 'Ozamis City',
            'street_name' => 'Vicente Ostia Ave.',
            'house_block_no' => 'Block 1',
            'subdivision_village' => 'Fuentes Village',
            'zipcode' => '7200',
            'country' => 'Philippines',
            'created_at' => '2024-04-02 21:05:11',
            'updated_at' => '2024-05-15 18:01:26',
        ]);
    }
}
