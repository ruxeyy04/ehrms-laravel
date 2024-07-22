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
        Schema::create('emp_eligibility_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('title');
            $table->string('rating')->nullable();
            $table->date('date_of_exam')->nullable();
            $table->string('place_of_exam')->nullable();
            $table->string('license_no')->nullable();
            $table->date('date_of_release_issuing_agency')->nullable();
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_eligibility_infos');
    }
};
