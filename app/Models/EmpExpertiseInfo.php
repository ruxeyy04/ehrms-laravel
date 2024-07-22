<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpExpertiseInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'expertise',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
