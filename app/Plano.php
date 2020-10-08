<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    protected $table = "planos";
    protected $primaryKey = "id";
    protected $fillable = ['plano', 'valor'];

    public function psicologo(){
        return $this->hasOne(Psicologo::class,'id_plano', 'id');
    }
}
