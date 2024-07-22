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
        Schema::create('emp_education_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('education_level');
            $table->string('school_name');
            $table->string('course')->nullable();
            $table->year('from_year')->nullable();
            $table->year('to_year')->nullable();
            $table->year('year_graduated')->nullable();
            $table->string('highest_grade')->nullable();
            $table->string('scholarship')->nullable();
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
        Schema::dropIfExists('emp_education_infos');
    }
};
