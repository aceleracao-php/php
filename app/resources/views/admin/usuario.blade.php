<h1>Seja bem vindo</h1>
<br>
@foreach ($usuario as $item)
    {{$item}}
@endforeach

<hr>
<h1>Meus artigos</h1>
<ul>
@foreach ($artigos as $item)
    <li>{{$item->title}}</li>
@endforeach
</ul>
