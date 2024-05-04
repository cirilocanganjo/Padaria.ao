<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $primaryKey = 'cod_pedido';
    protected $table = 'pedidos';

     protected $fillable =
    [
    'numero_convidados',
    'mensagem',
    'hora_entrega',
    'produto',
    'localizacao',
    'id_usuario'

    ];



    /* Relacionamento (1:N) */
        public function usuario(){
            return $this->belongsTo(User::class, 'id_usuario');
        }

    /* Fim Relacionamento (1:N) */
}
