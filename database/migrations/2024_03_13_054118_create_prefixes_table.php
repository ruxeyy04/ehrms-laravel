<?php

use App\Models\Prefix;
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
        Schema::create('prefixes_name', function (Blueprint $table) {
            $table->increments('prefix_id');
            $table->string('prefix_name')->unique();
        });

        Prefix::insert([
            [
                'prefix_id' => 1,
                'prefix_name' => 'Atty.'
            ],
            [
                'prefix_id' => 2,
                'prefix_name' => 'Dr.'
            ],
            [
                'prefix_id' => 3,
                'prefix_name' => 'Engr.'
            ],
            [
                'prefix_id' => 4,
                'prefix_name' => 'Miss'
            ],
            [
                'prefix_id' => 5,
                'prefix_name' => 'Mr.'
            ],
            [
                'prefix_id' => 6,
                'prefix_name' => 'Mrs.'
            ],
            [
                'prefix_id' => 7,
                'prefix_name' => 'Ms.'
            ],
            [
                'prefix_id' => 8,
                'prefix_name' => 'Prof.'
            ],
            [
                'prefix_id' => 9,
                'prefix_name' => 'Other'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prefixes_name');
    }
};
