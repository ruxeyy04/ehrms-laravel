<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpPersonalInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'hrid',
        'prefix_name',
        'suffix_name',
        'gender',
        'civil_status',
        'citizenship',
        'dual_citizenship',
        'birthdate',
        'birthplace',
        'blood_type',
        'e_signature',
        'years_of_experience',
        'height',
        'weight'
    ];

    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
