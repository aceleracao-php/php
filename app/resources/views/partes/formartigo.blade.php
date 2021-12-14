@csrf
<input type="text" name="title" value="{{ $artigo->title ?? old('title')}}" placeholder="Digite o titulo do Artigo.."><br>
<textarea name="resumo" rows="3" cols="15"> {{ $artigo->resumo ?? old('resumo') }} </textarea><br>
<textarea name="content" rows="3" cols="15">{{ $artigo->content ?? old('content')}}</textarea><br>
<button type="submit"> Salvar </button>