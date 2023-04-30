<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SchoolYear extends Model
{
    use HasFactory;

    protected $table = 'school_years';

    protected $primaryKey = 'year';

    public $incrementing = false;

    protected $fillable = [
        'year',
    ];


    public function school_classes(): HasMany
    {
        return $this->hasMany(SchoolClass::class, 'school_year', 'year');
    }

}
