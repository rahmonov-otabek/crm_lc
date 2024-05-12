<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as Authenticatable;


class Student extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone_number',
        'profile_pic',
        'address',
        'cash', 
        'birthday', 
        'gender', 
        'password', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_student');
    }
}
