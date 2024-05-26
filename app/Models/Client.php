<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'unit_name',
        'floor',
        'block',
        'full_name',
        'email',
        'phone',
        'present_address',
        'gender', 
        'occupation',
        'formal_picture',
        'nid_picture',
        'short_details',
        'unit_id',
        'status'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
