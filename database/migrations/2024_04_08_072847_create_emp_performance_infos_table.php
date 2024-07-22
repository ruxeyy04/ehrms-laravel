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
        Schema::create('emp_performance_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->text('core_behavioral_competencies')->nullable();
            $table->text('other_competencies')->nullable();
            $table->text('kra')->nullable();
            $table->year('year');
            $table->string('adjectival_rating')->nullable();
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
        Schema::dropIfExists('emp_performance_infos');
    }
};
