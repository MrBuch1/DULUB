@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

<div class="container mt-5" align="center">
    <h1 class="display-1"><strong>NOTÍCIAS</strong></h1>
</div>

<div class="container mt-5">
    @foreach ($noticia as $n)
        <a href="{{ route('noticia.id', $n->id) }}" style="color:black"><h3><strong>{{ $n->titulo }}</strong></h3></a>
        <p>{{ $n->created_at }}</p>
        <img class="image-responsive mb-5" src="{{ asset("storage/$n->imagem") }}" alt="" style="width:30%">
    @endforeach
    <h1></h1>
</div>

@component('components.rodape')@endcomponent
@endsection