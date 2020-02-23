<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'usuarios';

    protected $fillable = ['nome', 'sobrenome', 'email', 'dt_nascimento', 'cep', 'rua', 'numero', 'bairro', 'cidade', 'estado'];

    public $timestamps;
}
