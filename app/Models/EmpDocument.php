<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpDocument extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'title',
        'filename',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
