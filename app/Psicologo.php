<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psicologo extends Model
{
    protected $table = "psicologos";
    protected $primaryKey = "id";
    protected $fillable = ['foto', 'cpf', 'telefone', 'crp', 'valor_sessao', 'descricao', 'id_plano', 'id_user'];

    public function planos(){
        return $this->hasOne(Plano::class, 'id', 'id_plano');
    }

    public function histPsicologo (){
        return $this->hasMany(HistPsicologo::class, 'id', 'id_psicologo');
    }

    public function histCliente (){
        return $this->hasMany(HistCliente::class, 'psicologo_id', 'id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id', 'id_user');
    }
}
