<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'project_type',
        'project_location',
        'project_address',
        'project_img',
        'size',
        'floor',
        'status'
    ];
    // public function floors()
    // {
    //     return $this->hasMany(Floor::class);
    // }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}
