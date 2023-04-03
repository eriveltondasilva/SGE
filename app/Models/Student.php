<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'rg',
        'cpf',
        'email',
        'birth_place',
        'birth_date',
        'gender',
        'kin_name',
        'kin_kinship',
        'kin_telephone',
        'address_street',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'address_cep',
        'address_state',
        'nationality',
        'gov_benefits',
        'health_problem',
        'note',
    ];



    //
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
