<?php

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
        Schema::create('emp_residential_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hrid');
            $table->string('region', 255);
            $table->string('province', 255);
            $table->string('barangay', 255);
            $table->string('city', 255);
            $table->string('street_name', 255);
            $table->string('house_block_no', 255)->nullable();
            $table->string('subdivision_village', 255)->nullable();
            $table->string('zipcode', 50)->nullable();
            $table->string('country', 255);
            $table->timestamps();

            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_residential_infos');
    }
};
