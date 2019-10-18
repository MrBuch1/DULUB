@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container mb-5" style="margin-top:200px">
    <section class="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm">
                    <h1 class="mb-5"><strong>{{ $noticia->titulo }}</strong></h1>
                    <h5>{{ $noticia->conteudo }}</h5>
                </div>

                <div class="col-sm">
                    <img src="{{ asset("storage/$noticia->imagem") }}" alt="" style="width:500px">
                </div>
            </div>
        </div>
    </section>
</div>