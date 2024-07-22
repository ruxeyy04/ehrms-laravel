<?php

use App\Models\JobTitle;
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
        Schema::create('job_titles', function (Blueprint $table) {
            $table->id('job_id');
            $table->string('job_title', 255)->unique();
            $table->timestamps();
        });
        JobTitle::insert([
            [
                'job_id'=>'1',
                'job_title'=>'ACCOUNTANT I'
            ],
            [
                'job_id'=>'2',
                'job_title'=>'ACCOUNTANT II'
            ],
            [
                'job_id'=>'3',
                'job_title'=>'ACCOUNTANT III'
            ],
            [
                'job_id'=>'4',
                'job_title'=>'ACCOUNTANT IV'
            ],
            [
                'job_id'=>'5',
                'job_title'=>'ACCOUNTING ANALYST'
            ],
            [
                'job_id'=>'6',
                'job_title'=>'ACCOUNTING CLERK II'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_titles');
    }
};
