<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $fillable = [
        'property_name',
        'property_type',
        'property_location',
        'property_img',
        'size',
        'floor_number',
        'block',
        'property_rent',
        'property_utility_cost',
        'status',
        'project_id'
    ];
    // public function floor()
    // {
    //     return $this->belongsTo(Floor::class);
    // }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function client()
    {
        return $this->hasMany(Client::class);
    }
     public function users()
    {
        return $this->hasMany(User::class);
    }
    // public function users()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
