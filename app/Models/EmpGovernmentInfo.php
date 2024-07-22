<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpGovernmentInfo extends Model
{
    use HasFactory;

    protected $table = 'emp_government_infos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'prc_no',
        'sss_id',
        'gsis_bp_no',
        'tin_no',
        'philhealth_id',
        'pag_ibig_id',
        'gsis_id',
        'agency_employee_no',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
