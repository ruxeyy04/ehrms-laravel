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
        Schema::create('emp_researches_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('title_of_research');
            $table->year('year_conducted');
            $table->string('category_level')->nullable();
            $table->timestamps();


            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_researches_infos');
    }
};
