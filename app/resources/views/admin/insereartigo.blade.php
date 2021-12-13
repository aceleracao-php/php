<h1>Cadastrar novo artigo </h1>
<hr>
@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
@endif
<form action="{{route('artigos.inserir')}}" method="post">
    <input value="{{csrf_token()}}" type="hidden" name="_token">
    <input type="text" name="title" value="{{ old('title') }}" placeholder="Digite o titulo do Artigo.."><br>
    <textarea name="resumo" rows="3" cols="15"> {{ old('resumo') }} </textarea><br>
    <textarea name="content" rows="3" cols="15">{{ old('content') }}</textarea><br>
    <button type="submit"> Enviar </button>
</form>