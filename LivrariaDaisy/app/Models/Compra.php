<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $table = 'compras';

    protected $fillable = [
        'cliente_id',
        'data_compra',
        'morada_entrega',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function itensCarrinho()
    {
        return $this->hasMany(ItemCarrinho::class);
    }
}