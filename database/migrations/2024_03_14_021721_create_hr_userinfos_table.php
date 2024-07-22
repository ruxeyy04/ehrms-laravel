<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hr_userinfos', function (Blueprint $table) {
            $table->bigIncrements('hrid');
            $table->string('employee_no', 100)->unique()->nullable();
            $table->string('personal_email', 255)->unique();
            $table->string('deped_email', 255)->unique();
            $table->string('password', 255);
            $table->string('first_name', 255);
            $table->string('midname', 255);
            $table->string('last_name', 255);
            $table->string('profile_img', 255)->default('defaultimg.jpg');
            $table->date('employment_date');
            $table->date('dateof_leaving')->nullable();
            $table->string('employment_status', 100);
            $table->string('mode_of_employment', 100);
            $table->unsignedBigInteger('role_id');
            $table->bigInteger('salary_id')->nullable();
            $table->rememberToken();
            $table->string('status', 50)->default('Active');
            $table->integer('max_size_storage')->default(500);
            $table->integer('max_file_upload_size')->default(30000000);
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('role_infos');
        });

  
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hr_userinfos');
    }
};
