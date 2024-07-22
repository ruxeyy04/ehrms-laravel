<?php

use App\Models\EmploymentStatus;
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
        Schema::create('employment_statuses', function (Blueprint $table) {
            $table->increments('empstat_id');
            $table->string('emp_status', 100)->unique();
            $table->timestamps();
        });
        EmploymentStatus::insert([
            [
                'empstat_id'=>'1',
                'emp_status'=>'Casual'
            ],
            [
                'empstat_id'=>'2',
                'emp_status'=>'Co-Term with Appointee'
            ],
            [
                'empstat_id'=>'3',
                'emp_status'=>'Co-Term with Incumbent'
            ],
            [
                'empstat_id'=>'4',
                'emp_status'=>'Contract of Service'
            ],
            [
                'empstat_id'=>'5',
                'emp_status'=>'Contractual'
            ],
            [
                'empstat_id'=>'6',
                'emp_status'=>'Contractual Full-time'
            ],
            [
                'empstat_id'=>'7',
                'emp_status'=>'Contractual Part-time'
            ],
            [
                'empstat_id'=>'8',
                'emp_status'=>'Did Not Assume'
            ],
            [
                'empstat_id'=>'9',
                'emp_status'=>'Job Order'
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employment_statuses');
    }
};
