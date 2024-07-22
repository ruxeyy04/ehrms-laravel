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
        Schema::create('emp_org_pos_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hrid');
            $table->unsignedBigInteger('office_id');
            $table->bigInteger('department_id')->nullable();
            $table->unsignedBigInteger('job_id');
            $table->string('division_code', 100)->nullable();
            $table->string('station_code', 100)->nullable();
            $table->bigInteger('business_code');
            $table->timestamps();

            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
            $table->foreign('office_id')->references('office_id')->on('office_infos');
            $table->foreign('job_id')->references('job_id')->on('job_titles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_org_pos_infos');
    }
};
