@extends('layouts.layout')
@section('titulopagina', 'Listagem de Artigos')
@section('corpo')
<a href="{{route('artigos.novo')}}">
    <button>Cadastrar novo Artigo >> </button>
</a>
<hr>
@if (session('mensagem'))
     <p style="color: green;">{{ session('mensagem')}}</p>    
@endif
<h1>Meus artigos </h1>
<br>
<ul>
@foreach ($artigos as $item)
    <li>
        #COD {{$item->id}} | Title: {{$item->title}} | <a href="{{route('artigos.exibe', $item->id)}}">Ver Artigo </a> |
        <form action="{{route('artigos.remover', $item->id)}}" method="post">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{csrf_token()}}"> 
            <button type="submit">Deletar Artigo: ##{{$item->id}}</button>
        </form>
        <a href="{{route('artigos.editar', $item->id)}}"><button>Alterar Artigo: ##{{$item->id}}</button></a>
        <br><hr>
    </li>   
@endforeach
</ul>

Resultados: {{$artigos->links()}}
@endsection