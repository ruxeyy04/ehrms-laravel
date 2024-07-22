<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpTraining extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'hrid',
        'training_title',
        'training_venue',
        'start_date',
        'end_date',
        'education_level',
        'subject_area',
        'classification_of_activity',
        'nature_of_activity',
        'training_level',
        'sponsoring_group',
        'number_of_hours',
        'conducted_by',
        'funded_by',
    ];

    // Define relationships
    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
