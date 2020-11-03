<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GenerosController extends Controller
{
     public function index() {
       	$livros = Livro::paginate(4);

    	return view ('livros.index', [
    		'livros'=>$livros
    	]);
}
