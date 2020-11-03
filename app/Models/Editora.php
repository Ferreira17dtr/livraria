<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;


    // indicar qual a chave primária da tabela Livros
    Protected $primaryKey="ide";

    //esta propriedade não é necessario
    //mas vai ajudar-nos em situações futuras
    Protected $table = "editoras";
}
