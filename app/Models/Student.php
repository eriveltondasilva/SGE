<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name'
    ];



    // 
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
