<?php

use App\Models\ModeOfEmployement;
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
        Schema::create('mode_of_employements', function (Blueprint $table) {
            $table->increments('mode_id');
            $table->string('mode_of_emp', 100)->unique();
            $table->timestamps();
        });
        ModeOfEmployement::insert([
            [
                'mode_id'=>'1',
                'mode_of_emp'=>'Direct'
            ],
            [
                'mode_id'=>'2',
                'mode_of_emp'=>'Interview'
            ],
            [
                'mode_id'=>'3',
                'mode_of_emp'=>'Other'
            ],
            [
                'mode_id'=>'4',
                'mode_of_emp'=>'Reference'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mode_of_employements');
    }
};
