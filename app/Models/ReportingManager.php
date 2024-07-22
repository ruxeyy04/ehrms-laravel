<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportingManager extends Model
{
    use HasFactory;

    protected $table = 'reporting_managers';
    protected $primaryKey = 'id';
    public $timestamps = false; // If you don't have timestamps in your table

    protected $fillable = [
        'dept_id',
        'dept_name',
        'hrid',
        'position',
        'role'
    ];

    // Define relationships
    public function department()
    {
        return $this->belongsTo(DepartmentInfo::class, 'dept_id', 'dept_id');
    }

    public function hrUser()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid', 'hrid');
    }
}
