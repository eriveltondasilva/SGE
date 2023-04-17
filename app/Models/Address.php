<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'number',
        'complement',
        'neighborhood',
        'city',
        'cep',
        'state',
    ];





    // * Relacionamentos:
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    // public function addressTeachers(): HasMany
    // {
    //     return $this->hasMany(Teacher::class, 'address_id', 'id');
    // }

}
