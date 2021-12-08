<h1>Detalhes do Artigo: {{$artigo['title']}} </h1>
<br>
<hr>
Resumo: {{$artigo['resumo']}} <br>
Texto: {{$artigo['content']}} <br>
Criado em: {{$artigo['created_at']}}<br>
Atualizado em: {{$artigo['updated_at']}}<br>

<br><br>
<a href="{{route('artigos.index')}}">Voltar</a>