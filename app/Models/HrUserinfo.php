<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class HrUserinfo extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $primaryKey = 'hrid';

    protected $fillable = [
        'employee_no',
        'personal_email',
        'deped_email',
        'password',
        'first_name',
        'midname',
        'last_name',
        'profile_img',
        'mode_of_employment',
        'employment_date',
        'dateof_leaving',
        'employment_status',
        'role_id',
        'salary_id'
    ];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function role()
    {
        return $this->belongsTo(RoleInfo::class, 'role_id');
    }
    public function personalInfo()
    {
        return $this->hasOne(EmpPersonalInfo::class, 'hrid');
    }
    public function addressInfo() 
    {
        return $this->hasOne(EmpAddressInfo::class, 'hrid');
    }
    public function residentialInfo() 
    {
        return $this->hasOne(EmpResidentialInfo::class, 'hrid');
    }
    public function governmentInfo() 
    {
        return $this->hasOne(EmpGovernmentInfo::class, 'hrid');
    }
    public function familyInfo() 
    {
        return $this->hasOne(EmpFamilyInfo::class, 'hrid');
    }
    public function org_pos()
    {
        return $this->hasOne(EmpOrgPosInfo::class, 'hrid');
    }
    public function contact()
    {
        return $this->hasOne(EmpContactInfo::class, 'hrid');
    }
    public function salary() {
        return $this->hasOne(MonthlySalary::class, 'id', 'salary_id');
    }
    public function user_settings() {
        return $this->hasOne(UserSystemSetting::class, 'hrid');
    }
}
