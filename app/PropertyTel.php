<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyTel extends Model
{
    protected $table = 'tel_usuarios';

    protected $fillable = (['id','telefone']);

    public $timestamps;
}