<?php

// app/Models/Carrinho.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id'];

    public function itens()
    {
        return $this->hasMany(ItemCarrinho::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}