<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpWorkExperience extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'company_name',
        'position_title',
        'inclusive_date_from',
        'inclusive_date_to',
        'monthly_salary',
        'salary_grade',
        'step',
        'employment_status',
        'government_service',
    ];

    protected $casts = [
        'government_service' => 'boolean',
    ];


    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
