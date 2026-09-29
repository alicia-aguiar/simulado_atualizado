<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'preco',
        'cor',
        'textura',
        'peso',
        'unidade_medida',
        'qtd_minima',
        'qtd_estoque'
    ];

    use HasFactory;
}
