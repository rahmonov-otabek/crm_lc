<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'salary',
        'direction_id'
    ];

    public function direction()
    {
        return $this->belongsTo(Direction::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
