<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'addresses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'street',
        'complement',
        'neighborhood',
        'city',
        'cep',
        'state',
        'student_id',
        'teacher_id',
    ];





    // * Relacionamentos:
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id' );
    }

    // public function addressTeachers(): HasMany
    // {
    //     return $this->hasMany(Teacher::class, 'address_id', 'id');
    // }

}
