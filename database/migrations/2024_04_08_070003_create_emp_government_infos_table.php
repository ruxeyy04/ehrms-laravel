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
        Schema::create('emp_government_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('prc_no')->nullable();
            $table->string('sss_id')->nullable();
            $table->string('gsis_bp_no')->nullable();
            $table->string('tin_no')->nullable();
            $table->string('philhealth_id')->nullable();
            $table->string('pag_ibig_id')->nullable();
            $table->string('gsis_id')->nullable();
            $table->string('agency_employee_no')->nullable();
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
        Schema::dropIfExists('emp_government_infos');
    }
};
