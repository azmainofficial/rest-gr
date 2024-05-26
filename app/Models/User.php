<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'unit_name',
        'floor',
        'block',
        'confirm_rent',
        'utility_cost',
        'full_name',
        'full_name2',
        'user_name',
        'password',
        'fathers_name',
        'mothers_name',
        'formal_picture',
        'formal_picture2',
        'nid_picture',
        'nid_picture2',
        'dob',
        'email',
        'phone_number',
        'permanent_address',
        'present_address',
        'aggrement_atch',
        'city',
        'state',
        'postal_code',
        'country',
        'profession',
        'nationality',
        'religion',
        'nominee_name',
        'nominee_picture',
        'nominee_nid',
        'nominee_phone_number',
        'relationship',
        'share',
        'status',
        'unit_id'
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    // public function unit()
    // {
    //     return $this->hasMany(Unit::class);
    // }
    public function months()
    {
        return $this->hasMany(Month::class);
    }
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
