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





    public function schoolStudents(): HasMany
    {
        return $this->hasMany(Student::class, 'address_id', 'id');
    }

    public function scTeachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'address_id', 'id');
    }
}
