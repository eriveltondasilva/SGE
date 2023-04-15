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
        'rg',
        'cpf',
        'email',
        'birth_place',
        'birth_date',
        'gender',
        'nationality',
        'gov_benefits',
        'health_problem',
        'note',
    ];





    // * Relacionamentos:
    public function studentAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function studentSchool(): BelongsTo
    {
        return $this->belongsTo(School::class, 'school_id', 'id');
    }





    // * Limitar a buscar pelos alunos ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true)->where('school_id', Auth::user()->school_id);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false)->where('school_id', Auth::user()->school_id);
    }
}
