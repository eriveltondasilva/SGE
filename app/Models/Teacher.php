<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'address_street',
        'address_complement',
        'address_neighborhood',
        'address_city',
        'address_cep',
        'address_state',
        'nationality',
    ];





    // Address Model
    public function teacherAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }





    // Limitar a buscar pelos professores ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }

    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
