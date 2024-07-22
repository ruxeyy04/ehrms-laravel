<?php

use App\Models\DepartmentInfo;
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
        Schema::create('department_infos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('department_id')->unique();
            $table->bigInteger('business_code');
            $table->string('department_name', 255)->nullable();
            $table->timestamps();

        });
        DepartmentInfo::insert([
            [
                'department_id' => 100101,
                'business_code' => 1001,
                'department_name' => "SDO-OSDS"
            ],
            [
                'department_id' => 100102,
                'business_code' => 1001,
                'department_name' => "SDO-OASDS"
            ],
            [
                'department_id' => 100201,
                'business_code' => 1002,
                'department_name' => "CID-Office of the Division Chief Proper (CDCP)"
            ],
            [
                'department_id' => 100202,
                'business_code' => 1002,
                'department_name' => "CID-Instructional Mgmt / District Supervisors (IMS)"
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department_infos');
    }
};
