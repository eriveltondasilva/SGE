<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;


class Teacher extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'teachers';

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
        'telephone',
        'birth_date',
        'gender',
        'nationality',
    ];





    // * Relacionamentos:
    // public function teacherAddress(): BelongsTo
    // {
    //     return $this->belongsTo(Address::class, 'address_id', 'id');
    // }

    // public function teacherSchool(): BelongsTo
    // {
    //     return $this->belongsTo(School::class, 'school_id', 'id');
    // }





    // * Limitar a buscar pelos professores ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true)->where('school_id', Auth::user()->school_id);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false)->where('school_id', Auth::user()->school_id);
    }
}
