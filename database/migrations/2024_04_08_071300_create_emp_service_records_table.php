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
        Schema::create('emp_service_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->date('service_from');
            $table->date('service_to')->nullable();
            $table->string('designation');
            $table->string('appointment_status');
            $table->decimal('salary', 10, 2);
            $table->string('place_of_assignment');
            $table->string('branch');
            $table->date('leave_from')->nullable();
            $table->date('leave_to')->nullable();
            $table->date('separation_date')->nullable();
            $table->string('separation_cause')->nullable();
            $table->string('remarks')->nullable();
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
        Schema::dropIfExists('emp_service_records');
    }
};
