<?php

use App\Models\RoleInfo;
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
        Schema::create('role_infos', function (Blueprint $table) {
            $table->id('role_id');
            $table->string('role_name', 100)->nullable();
            $table->timestamps();
        });

        RoleInfo::insert([
            [
                'role_id' => 1,
                'role_name' => 'Employee'
            ],
            [
                'role_id' => 2,
                'role_name' => 'HR Manager'
            ],
            [
                'role_id' => 3,
                'role_name' => 'Admin Manager'
            ],
            [
                'role_id' => 4,
                'role_name' => 'RD Manager'
            ],
            [
                'role_id' => 5,
                'role_name' => 'System Admin'
            ],
            [
                'role_id' => 6,
                'role_name' => 'Staff'
            ],
            [
                'role_id' => 7,
                'role_name' => 'Reporting Manager'
            ],
            [
                'role_id' => 8,
                'role_name' => 'HR Staff'
            ],
            [
                'role_id' => 9,
                'role_name' => 'Others'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_infos');
    }
};
