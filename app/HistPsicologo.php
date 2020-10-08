<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistPsicologo extends Model
{
    protected $table = 'hist_psicologos';
    protected $primaryKey = 'id';
    protected $fillable = ['data_sessao', 'valor_consulta', 'psicologo_id', 'cliente_id'];
    protected $dates = ['data_sessao']; 
    public $timestamps = false;


    public function psicologo(){
        return $this->hasOne(Psicologo::class, 'id', 'psicologo_id');

    }
    
    public function cliente(){
        return $this->hasOne(Cliente::class, 'id', 'cliente_id');

    }

   
}
