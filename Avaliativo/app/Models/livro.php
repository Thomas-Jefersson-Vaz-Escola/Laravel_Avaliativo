<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class livro extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_livro',
        'isbn_livro',
        'genero_livro',
        'data_publ_livro',
        'capa_livro',
        'nr_pag_livro',
        'idade_rec_livro',
    ];
}
