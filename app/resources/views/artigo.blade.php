<h1>Meus artigos </h1>
<br>
<ul>
@foreach ($artigos as $item)
    <li>#COD {{$item->id}} | Title: {{$item->title}} | <a href="{{route('artigos.exibe', $item->id)}}">Ver Artigo </a></li>
@endforeach
</ul>