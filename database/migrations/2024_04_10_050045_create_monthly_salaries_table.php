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
        Schema::create('monthly_salaries', function (Blueprint $table) {
            $table->id();
            $table->integer('salary_grade');
            $table->integer('salary_step');
            $table->decimal('salary_amount', total: 10, places: 2);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_salaries');
    }
};
