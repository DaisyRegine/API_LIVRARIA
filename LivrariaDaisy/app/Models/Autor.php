<?php

// app/Models/Autor.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;

    protected $table = 'autores';

    protected $fillable = [
        'nome',
        'sobrenome',
        'apelido',
        'email',
        'biografia',
    ];

    public function livros()
    {
        return $this->hasMany(Livro::class);
    }
}