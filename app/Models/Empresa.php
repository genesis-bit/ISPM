<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'nif',
        'endereco',
        'tipo_empresa_id',
    ];

    public function TipoEmpresa()
    {
       return $this->hasOne(TipoEmpresa::class, 'id', 'tipo_empresa_id');
    }
    public function Funcionarios()
    {
        return $this->hasMany(Funcionario::class, 'empresa_id', 'id');
    }
       
}
