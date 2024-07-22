<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpContactInfo extends Model
{
    use HasFactory;

    protected $fillable = ['hrid', 'phone_number', 'tel_num', 'personal_email', 'emergency_contact_name', 'emergency_contact_no', 'emergency_email'];

    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
