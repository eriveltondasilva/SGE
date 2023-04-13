<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class School extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'schools';





    // * Relacionamentos:
    public function schoolStudents(): HasMany
    {
        return $this->hasMany(Student::class, 'school_id', 'id');
    }

    public function schoolTeachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'school_id', 'id');
    }

    public function schoolUsers(): HasMany
    {
        return $this->hasMany(User::class, 'school_id', 'id');
    }
}
