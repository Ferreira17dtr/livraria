<ul>
@foreach($editoras as $editora)
<li>
<a href="{{route('editoras.show', ['id'=>$livro->idl])}}">
	{{$editora->nome}}</li>
@endforeach
</ul>
{{$editoras->render()}}