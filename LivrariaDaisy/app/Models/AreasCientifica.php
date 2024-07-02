<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AreasCientifica extends Model
{
    use HasFactory;

    protected $table = 'areas_cientificas';

    protected $fillable = [
        'nome',
    ];

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'cliente_area_cientifica', 'area_cientifica_id', 'cliente_id')
                    ->withPivot('motivo');
    }
}