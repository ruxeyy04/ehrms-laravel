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
        Schema::create('emp_awards_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('award_title');
            $table->string('category')->nullable();
            $table->string('school_year')->nullable();
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
        Schema::dropIfExists('emp_awards_infos');
    }
};
