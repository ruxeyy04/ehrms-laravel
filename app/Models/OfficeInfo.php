<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeInfo extends Model
{
    use HasFactory;

    protected $primaryKey = 'office_id';
    public $incrementing = true;
    protected $fillable = ['office_name'];

    public function employees()
    {
        return $this->hasMany(EmpOrgPosInfo::class, 'office_id');
    }
}
