<h1>Editar Artigo : {{$artigo->title}}</h1>
<hr>
@include('partes.errors')
<form action="{{route('artigos.update', $artigo->id)}}" method="post">
    @method('PUT')
    @include('partes.formartigo')
</form>