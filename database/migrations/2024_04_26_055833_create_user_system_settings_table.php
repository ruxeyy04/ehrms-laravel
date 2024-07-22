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
        Schema::create('user_system_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->string('system_mode')->nullable();
            $table->string('sidebar_mode')->nullable();
            $table->string('header_mode')->nullable();
            $table->string('backgrounds_mode')->nullable();
            $table->string('box_design')->nullable();
            $table->string('setting_icon')->nullable();
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
        Schema::dropIfExists('user_system_settings');
    }
};
