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
        Schema::create('emp_contact_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hrid');
            $table->string('phone_number', 100);
            $table->string('tel_num', 100)->nullable();
            $table->string('personal_email', 150)->nullable();
            $table->string('emergency_contact_name', 255)->nullable();
            $table->string('emergency_contact_no', 255)->nullable();
            $table->string('emergency_email', 255)->nullable();
            $table->timestamps();

            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_contact_infos');
    }
};
