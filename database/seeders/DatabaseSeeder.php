<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            HrUserinfoSeeder::class,
            EmpFamilyInfoSeeder::class,
            EmpGovernmentInfoSeeder::class,
            EmpOrgPosInfoSeeder::class,
            EmpPersonalInfoSeeder::class,
            EmpResidentialInfoSeeder::class,
            EmpAddressInfoSeeder::class,
            EmpContactInfoSeeder::class,
        ]);
    }
}
