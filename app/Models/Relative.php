<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relative extends Model
{
    use HasFactory;


    protected $table = 'relatives';


    protected $fillable = [
        'name',
        'email',
        'telephone',
        'kinship',
    ];





    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'student_id', 'id');
    }
}
