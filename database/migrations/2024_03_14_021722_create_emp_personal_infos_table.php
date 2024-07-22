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
        Schema::create('emp_personal_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hrid');
            $table->string('prefix_name', 20)->nullable();
            $table->string('suffix_name', 30)->nullable();
            $table->string('gender', 50);
            $table->string('civil_status', 50)->nullable();
            $table->string('citizenship', 100)->nullable();
            $table->string('dual_citizenship', 100)->nullable();
            $table->date('birthdate');
            $table->string('birthplace', 255)->nullable();
            $table->string('blood_type', 20)->nullable();
            $table->string('e_signature', 255)->nullable();
            $table->integer('years_of_experience');
            $table->timestamps();

            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_personal_infos');
    }
};
