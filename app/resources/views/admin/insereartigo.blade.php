<h1>Cadastrar novo artigo </h1>
<hr>
@include('partes.errors')
<form action="{{route('artigos.inserir')}}" method="post">
    @include('partes.formartigo')
</form>