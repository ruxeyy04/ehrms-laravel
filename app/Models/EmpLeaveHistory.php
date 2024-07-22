<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpLeaveHistory extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'credits_from',
        'credits_to',
        'no_of_days',
        'particulars',
        'type',
        'balance',
        'remarks',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
