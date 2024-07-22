<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpAwardsInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'award_title',
        'category',
        'school_year',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
