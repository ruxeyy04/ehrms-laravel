<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefix extends Model
{
    use HasFactory;

    protected $table = 'prefixes_name';
    protected $primaryKey = 'prefix_id';
    public $timestamps = false;

    protected $fillable = [
        'prefix_name'
    ];
}
