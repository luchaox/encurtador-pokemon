<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudante extends Model
{
    protected $fillable = ['nome', 'cpf', 'nascimento', 'sala_id'];
}

