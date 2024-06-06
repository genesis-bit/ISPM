<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Legalizacao extends Model
{
    use HasFactory;
    protected $fillable = [
        'bl',
        'navio',
        'viagem',
        'eta',
        'produto',
        'agencia_id',
        'funcionario_id',
    ];

    public function Agencia()
    {
       return $this->hasOne(Empresa::class, 'id', 'agencia_id');
    }
    public function Funcionario()
    {
        return $this->hasOne(Funcionario::class, 'id', 'funcionario_id');
    }
}
