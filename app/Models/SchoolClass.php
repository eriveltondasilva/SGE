<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SchoolClass extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shift',
        'schooling',
        'room',
    ];

    public function school_year(): BelongsTo
    {
        return $this->belongsTo(SchoolYear::class, 'school_year', 'year');
    }

}
