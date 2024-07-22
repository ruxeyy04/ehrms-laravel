<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessUnit extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $fillable = ['business_code', 'business_name'];

    public function departments()
    {
        return $this->hasMany(DepartmentInfo::class, 'business_code');
    }
}
