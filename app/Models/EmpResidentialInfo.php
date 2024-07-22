<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpResidentialInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'hrid',
        'region',
        'province',
        'barangay',
        'city',
        'street_name',
        'house_block_no',
        'subdivision_village',
        'zipcode',
        'country'
    ];

    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
