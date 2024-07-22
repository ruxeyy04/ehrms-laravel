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
        Schema::create('emp_leave_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hrid');
            $table->date('credits_from');
            $table->date('credits_to');
            $table->decimal('no_of_days', 8, 2);
            $table->string('particulars');
            $table->string('type');
            $table->decimal('balance', 8, 2);
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
        Schema::dropIfExists('emp_leave_histories');
    }
};
