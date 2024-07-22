<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpEligibilityInfo extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'title',
        'rating',
        'date_of_exam',
        'place_of_exam',
        'license_no',
        'date_of_release_issuing_agency',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
