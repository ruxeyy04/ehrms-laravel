<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpFamilyInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'relationship',
        'first_name',
        'middle_name',
        'last_name',
        'extension',
        'birthdate',
        'occupation',
        'employer_name',
        'business_add',
        'telephone_number',
        'deceased',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
