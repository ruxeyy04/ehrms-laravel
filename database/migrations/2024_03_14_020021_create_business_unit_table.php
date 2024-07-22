<?php

use App\Models\BusinessUnit;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('business_code')->unique();
            $table->string('business_name', 150);
            $table->timestamps();
        });

        BusinessUnit::insert([
            [
                'business_code'=>'1001',
                'business_name'=>'Office of the School Division Superintendent'
            ],
            [
                'business_code'=>'1002',
                'business_name'=>'Office of the CID'
            ],
            [
                'business_code'=>'1003',
                'business_name'=>'Office of the SGOD'
            ],
            [
                'business_code'=>'1004',
                'business_name'=>'School (Elementary)'
            ],
            [
                'business_code'=>'1005',
                'business_name'=>'School (Secondary)'
            ],
            [
                'business_code'=>'1006',
                'business_name'=>'School (Senior High)'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_units');
    }
};
