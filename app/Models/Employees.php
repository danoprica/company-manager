<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'project_id'
    ];

    protected static function booted(){

        static::creating(function ($newEmployee) {
            $newEmployee->user_id = Auth::id();
        });

    }

}
