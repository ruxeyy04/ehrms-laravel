<?php

use App\Models\OfficeInfo;
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
        Schema::create('office_infos', function (Blueprint $table) {
            $table->bigIncrements('office_id');
            $table->string('office_name', 255);
            $table->timestamps();
        });

        OfficeInfo::insert([
            [
                'office_id' => 1,
                'office_name' => 'DepEd Ozamiz'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('office_infos');
    }
};
