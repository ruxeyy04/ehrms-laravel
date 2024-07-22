<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeOfEmployement extends Model
{
    use HasFactory;
    protected $primaryKey = 'mode_id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['mode_of_emp'];

}
