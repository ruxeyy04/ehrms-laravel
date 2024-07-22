<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpOrgPosInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'hrid',
        'office_id',
        'department_id',
        'job_id',
        'division_code',
        'station_code',
        'business_code'
    ];

    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }

    public function office()
    {
        return $this->belongsTo(OfficeInfo::class, 'office_id');
    }

    public function department()
    {
        return $this->belongsTo(DepartmentInfo::class, 'department_id', 'department_id');
    }

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class, 'job_id');
    }

    public function businessUnit()
    {
        return $this->belongsTo(BusinessUnit::class, 'business_code', 'business_code');
    }
    public function contact()
    {
        return $this->belongsTo(EmpContactInfo::class, 'hrid', 'hrid');
    }
}
