<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    protected $fillable = [
        'lead_name',
        'project_name',
        'floor_name',
        'unit_name',
        'payed_amount',
        'assigned_months',
        'attachment_picture',
        'user_id',
        'month_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function month()
    {
        return $this->belongsTo(Month::class);
    }
}
