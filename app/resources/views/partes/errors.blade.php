@if($errors->any())
    <div>
        @foreach ($errors->all() as $error)
            {{$error}}
        @endforeach
    </div>
@endif