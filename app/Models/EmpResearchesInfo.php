<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpResearchesInfo extends Model
{
    use HasFactory;

    protected $table = 'emp_researches_info';
    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'title_of_research',
        'year_conducted',
        'category_level',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
