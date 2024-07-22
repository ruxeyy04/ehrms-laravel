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
        Schema::create('emp_work_experiences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('company_name');
            $table->string('position_title');
            $table->date('inclusive_date_from');
            $table->date('inclusive_date_to')->nullable();
            $table->decimal('monthly_salary', 10, 2)->nullable();
            $table->string('salary_grade')->nullable();
            $table->string('step')->nullable();
            $table->string('employment_status')->nullable();
            $table->boolean('government_service')->default(false);
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
        Schema::dropIfExists('emp_work_experiences');
    }
};
