<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeekDay extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'week_day_group');
    }
}
