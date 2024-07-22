<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suffix extends Model
{
    use HasFactory;

    protected $table = 'suffixes_name';
    protected $primaryKey = 'ext_id';
    public $timestamps = false;

    protected $fillable = [
        'extension_name'
    ];

}
