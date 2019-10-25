@extends('layouts.app')
@component('components.navbar')@endcomponent

@if ($registros->categoria_id == 1)
    <div class="container-fluid">
        <img class="img-responsive container-fluid mb-5" src="..\images\wallpaper-otto.jpg" alt="" style="margin-top:-125px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 2)
    <div class="container-fluid">
        <img class="img-responsive container-fluid mb-5" src="..\images\bg_automotivo_ciclo_diesel.jpg" alt="" style="margin-top:-600px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 3)
    <div class="container-fluid">
        <img class="img-responsive container-fluid mb-5" src="..\images\motocicletas.jpg" alt="" style="margin-top:-500px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 4)
    <div class="container-fluid">
        <img class="img-responsive container-fluid mb-5" src="..\images\bg-transmissao.jpg" alt="" style="margin-top:-625px; filter:brightness(50%);">
    </div>
@endif


<div class="container mb-5">
    <section class="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm">
                    <h1><strong>{{ $registros->nome }}</strong></h1>
                    <hr><br>
                    <h4><strong>{{ $registros->uso }}</strong></h4>
                    <h5>{{ $registros->descricao }}</h5>
                    <div align="right">
                        <a href="{{ route('ficha', $registros->id) }}"><h5><strong>FICHA TÉCNICA</strong></h5></a>
                        
                        <a href="{{ route('fispq', $registros->id) }}"><h5><strong>FISPQ</strong><h5></a>
                    </div>
                </div>

                <div class="col-sm">
                    <img class="image-responsive container" src="../{{ $registros->imagem }}" alt="">
                </div>
            </div>
        </div>
    </section>
</div>

@component('components.rodape')@endcomponent

