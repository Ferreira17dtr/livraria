<ul>
@foreach($autores as $autor)
<li>{{$autor->titulo}}</li>
@endforeach
</ul>
{{$autores->render()}}