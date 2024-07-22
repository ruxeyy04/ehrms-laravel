<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSystemSetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = [
        'hrid',
        'system_mode',
        'sidebar_mode',
        'header_mode',
        'backgrounds_mode',
        'box_design',
        'setting_icon'
    ];


    public function userinfo()
    {
        return $this->belongsTo(HrUserinfo::class, 'hrid');
    }
}
