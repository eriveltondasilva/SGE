<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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





    // Address Model
    public function studentAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }





    // Limitar a buscar pelos alunos ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
