<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $dates = 
    [
        'data_nascimento',
        'created_at'
    ];
    protected $fillable = 
    [
        'id',
        'name',
        'cpf',
        'data_nascimento',
        'email',
        'telefone',
        'logradouro',
        'bairro',
        'numero',
        'cidade',
        'estado',
        'created_at',
        'updated_at'
    ];

    
}