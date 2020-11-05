<ul>
@foreach($autores as $autor)
<li><a href="{{route('autores.show', ['id'=>$livro->idl])}}">{{$autor->nome}}</li>
@endforeach
</ul>
{{$autores->render()}}