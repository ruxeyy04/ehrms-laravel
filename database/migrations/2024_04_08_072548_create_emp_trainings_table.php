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
        Schema::create('emp_trainings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('training_title');
            $table->string('training_venue')->nullable();
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('education_level')->nullable();
            $table->string('subject_area')->nullable();
            $table->string('classification_of_activity')->nullable();
            $table->string('nature_of_activity')->nullable();
            $table->string('training_level')->nullable();
            $table->string('sponsoring_group')->nullable();
            $table->integer('number_of_hours')->nullable();
            $table->string('conducted_by')->nullable();
            $table->string('funded_by')->nullable();
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
        Schema::dropIfExists('emp_trainings');
    }
};
