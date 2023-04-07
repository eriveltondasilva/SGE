<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'rg',
        'cpf',
        'email',
        'telephone',
        'birth_date',
        'gender',
        'address_street',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'address_cep',
        'address_state',
        'nationality',
    ];



    // Limitar a buscar pelos professores ativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
