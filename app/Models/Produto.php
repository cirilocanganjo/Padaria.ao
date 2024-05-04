<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_produto';
    protected $table = 'produtos';
    
    protected $fillable = [
        'produto',
        'preco',
        'foto',
        'descricao'
    ];
}
