<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['department_id','business_code', 'department_name'];

    public function businessUnit()
    {
        return $this->belongsTo(BusinessUnit::class, 'business_code');
    }
}
