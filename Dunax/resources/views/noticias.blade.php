@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container" style="margin-top:200px" align="center">
    <h1 class="display-1"><strong>NOTÍCIAS</strong></h1>
</div>

<div class="container mt-5" align="center">
    @foreach ($noticia as $n)
        <a href="#"><h3>{{ $n->titulo }}</h3></a>
        <img class="image-responsive" src="{{ asset("storage/$n->imagem") }}" alt="" style="width:25%">
    @endforeach
    <h1></h1>
</div>