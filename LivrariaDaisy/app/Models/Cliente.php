<?php

// app/Models/Cliente.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'apelido', 'nacionalidade', 'email', 'password',
        'cartao_credito', 'profissao', 'bi_passaporte', 'morada', 'telefone'
    ];

    protected $hidden = ['password'];

    public function carrinho()
    {
        return $this->hasOne(Carrinho::class);
    }

    public function areasCientificas()
    {
        return $this->belongsToMany(AreasCientifica::class);
    }
}