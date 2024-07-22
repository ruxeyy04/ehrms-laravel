<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentStatus extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'empstat_id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['emp_status'];

}
