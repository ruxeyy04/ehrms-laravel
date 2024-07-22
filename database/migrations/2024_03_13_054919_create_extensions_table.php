<?php

use App\Models\Suffix;
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
        Schema::create('suffixes_name', function (Blueprint $table) {
            $table->increments('ext_id');
            $table->string('extension_name')->unique();
        });

        Suffix::insert([
            [
                'ext_id' => 1,
                'extension_name' => 'Jr.'
            ],
            [
                'ext_id' => 2,
                'extension_name' => 'Sr.'
            ],
            [
                'ext_id' => 3,
                'extension_name' => 'I'
            ],
            [
                'ext_id' => 4,
                'extension_name' => 'II'
            ],
            [
                'ext_id' => 5,
                'extension_name' => 'III'
            ],
            [
                'ext_id' => 6,
                'extension_name' => 'IV'
            ],
            [
                'ext_id' => 7,
                'extension_name' => 'V'
            ],
            [
                'ext_id' => 8,
                'extension_name' => 'VI'
            ],
            [
                'ext_id' => 9,
                'extension_name' => 'VII'
            ],
            [
                'ext_id' => 10,
                'extension_name' => 'VIII'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suffixes_name');
    }
};
