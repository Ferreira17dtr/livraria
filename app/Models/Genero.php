<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;


    // indicar qual a chave primária da tabela Livros
    Protected $primaryKey="idg";

    //esta propriedade não é necessario
    //mas vai ajudar-nos em situações futuras
    Protected $table = "generos";
}
