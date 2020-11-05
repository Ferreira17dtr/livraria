<ul>
@foreach($generos as $genero)
<li>
	<a href="{{route('generos.show', ['id'=>$livro->idl])}}">{{$genero->designacao}}</li>
@endforeach
</ul>
{{$generos->render()}}