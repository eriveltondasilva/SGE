<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Student extends Model
{
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'students';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'rg',
        'cpf',
        'telephone',
        'nationality',
        'birth_date',
        'gender',
        'photo_path',
        'birth_place',
        'gov_benefits',
        'health_problems',
        'note',
        'school_id'
    ];



    // * Relacionamentos:
    // public function address(): BelongsTo
    // {
    //     return $this->belongsTo(Address::class, 'student_id', 'id');
    // }

    // public function school(): HasOne
    // {
    //     return $this->hasOne(School::class, 'school_id', 'id');
    // }





    // * Limitar a buscar pelos alunos ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }


    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
