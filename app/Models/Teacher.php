<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Teacher extends Model
{
    use HasFactory;


    protected $table = 'teachers';


    protected $fillable = [
        'name',
        'rg',
        'cpf',
        'email',
        'telephone',
        'birth_date',
        'nationality',
        'gender',
        'photo_path',

    ];


    protected $casts = [
        'birth_date' => 'date',
    ];





    // * Relacionamentos:
    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'teacher_id', 'id');
    }





    // * Limitar a buscar pelos professores ativos ou desativos
    public function scopeIsActive(Builder $query): void
    {
        $query->where('status', true);
    }


    public function scopeIsNotActive(Builder $query): void
    {
        $query->where('status', false);
    }
}
