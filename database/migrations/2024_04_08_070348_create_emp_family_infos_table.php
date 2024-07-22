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
        Schema::create('emp_family_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('relationship');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('last_name');
            $table->string('extension')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('business_add')->nullable();
            $table->string('telephone_number')->nullable();
            $table->string('deceased')->nullable();
            $table->timestamps();

            
            $table->foreign('hrid')->references('hrid')->on('hr_userinfos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emp_family_infos');
    }
};
