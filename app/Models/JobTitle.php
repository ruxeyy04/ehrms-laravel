<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobTitle extends Model
{
    use HasFactory;

    protected $primaryKey = 'job_id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['job_title'];

    public function employees()
    {
        return $this->hasMany(EmpOrgPosInfo::class, 'job_id');
    }
}
