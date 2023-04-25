<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;


    protected $table = 'addresses';


    protected $fillable = [
        'street',
        'complement',
        'neighborhood',
        'city',
        'cep',
        'state',
    ];





    // * Relacionamentos:
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }

}
