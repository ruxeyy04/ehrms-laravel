<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpServiceRecord extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'service_from',
        'service_to',
        'designation',
        'appointment_status',
        'salary',
        'place_of_assignment',
        'branch',
        'leave_from',
        'leave_to',
        'separation_date',
        'separation_cause',
        'remarks',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
