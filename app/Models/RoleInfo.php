<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleInfo extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'role_id';
    public $incrementing = true;
    protected $fillable = ['role_name'];
    public $timestamps = false;
    public function users()
    {
        return $this->hasMany(HrUserinfo::class, 'role_id');
    }
}
