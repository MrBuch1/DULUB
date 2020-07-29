@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

@if ($registros->categoria_id == 1) <!-- OTTO -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\wallpaper-otto.jpg" alt="" style="width:100%; margin-top:-85px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 2) <!-- DIESEL -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\bg_automotivo_ciclo_diesel.jpg" alt="" style="width:100%; margin-top:-550px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 3) <!-- MOTOCICLETAS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\motocicletas.jpg" alt="" style="width:100%; margin-top:-385px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 4) <!-- TRANSMISSÃO -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\bg-transmissao.jpg" alt="" style="width:100%; margin-top:-550px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 5) <!-- ENGRENAGENS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\caixa_marcha.jpg" alt="" style="width:100%; margin-top:-325px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 6) <!-- GRAXAS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\engrenagens_2.jpg" alt="" style="width:100%; margin-top:-475px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 7) <!-- ARLA -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\slider_arla2.jpg" alt="" style="width:100%; margin-top:-250px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 8) <!-- EQUIPAMENTOS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\bg-transmissao.jpg" alt="" style="width:100%; margin-top:-550px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 9) <!-- HIDRAULICOS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\escavadeira.jpg" alt="" style="width:100%; margin-top:-650px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 10) <!-- REFRIGERAÇÃO -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\refrigeracao.jpg" alt="" style="width:100%; margin-top:-400px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 11) <!-- COMPRESSORES -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\turbinas.jpg" alt="" style="width:100%; margin-top:-500px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 12) <!-- ENGRENAGENS INDUSTRIAIS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\engrenagens.jpg" alt="" style="width:100%; margin-top:-350px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 13) <!-- TERMICOS -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\aquecedor.jpg" alt="" style="width:100%; margin-top:-100px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 14) <!-- DESMOLDANTES -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\desmoldantes.jpg" alt="" style="width:100%; margin-top:-85px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 15) <!-- TEXTIL -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\teares.jpg" alt="" style="width:100%; margin-top:-250px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 16) <!-- TRANSFORMADORES -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\transformador.jpg" alt="" style="width:100%; margin-top:-550px; filter:brightness(50%);">
    </div>
@endif

@if ($registros->categoria_id == 17) <!-- OTTO -->
    <div class="container-narrow">
        <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\wallpaper-otto.jpg" alt="" style="width:100%; margin-top:-85px; filter:brightness(50%);">
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
                    <h5 style="text-align:justify">{{ $registros->descricao }}</h5>
                    <h5 style="text-align:justify">{{ $registros->comp_quimica }}</h5>
                    <div class="mt-5" align="right">
                        <a href="{{ route('ficha', $registros->id) }}"><h5><strong>FICHAS TÉCNICAS</strong></h5></a>
                        
                        <a href="{{ route('fispq', $registros->id) }}"><h5><strong>FISPQs</strong><h5></a>
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

@endsection