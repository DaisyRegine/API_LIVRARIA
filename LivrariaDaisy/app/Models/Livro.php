<?php

// app/Models/Livro.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'isbn', 'editora', 'ano_publicacao'];

    public function autores()
    {
        return $this->belongsToMany(Autor::class);
    }
}