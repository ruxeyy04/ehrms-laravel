<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpEducationInfo extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'education_level',
        'school_name',
        'course',
        'from_year',
        'to_year',
        'year_graduated',
        'highest_grade',
        'scholarship',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
