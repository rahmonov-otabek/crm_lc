<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory; 
use Illuminate\Foundation\Auth\User as Authenticatable;


class Teacher extends Authenticatable
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone_number',
        'profile_pic', 
        'salary', 
        'birthday', 
        'gender', 
        'password', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function groups()
    {
        return $this->hasMany(Group::class);
    }
}
