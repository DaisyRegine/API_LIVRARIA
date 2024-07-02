<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemCarrinho extends Model
{
    use HasFactory;

    protected $table = 'itens_carrinho';

    protected $fillable = [
        'carrinho_id',
        'compra_id',
        'livro_id',
        'quantidade',
        'preco',
    ];

    public function compra()
    {
        return $this->belongsTo(Compra::class);
    }

    public function livro()
    {
        return $this->belongsTo(Livro::class);
    }
}