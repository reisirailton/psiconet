<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistCliente extends Model
{
    protected $table = 'hist_clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['data_sessao', 'valor_consulta', 'psicologo_id', 'cliente_id'];
    
}
