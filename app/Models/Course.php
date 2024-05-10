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

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
