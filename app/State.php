<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $primaryKey = 'id';
    protected $fillable = ['title', 'letter', 'iso', 'slug', 'population'];
}


