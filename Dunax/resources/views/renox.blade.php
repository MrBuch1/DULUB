@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

<div class="container-narrow my-5">
    <img class="img-responsive img-fluid shadow-lg" src="images/slider_arla2.jpg" alt="" style="margin-top:-250px">
</div>

<div class="container" align="center" style="margin-top:100px; margin-bottom:200px">
    <h1 class="display-2">Em breve...</h1>
</div>

<!-- <div class="container mb-5" align="center">
    <h1 class="display-4 mb-5">A maior novidade da Dunax está aqui!</h1>
    <img class="img-responsive container mb-5" src="images/Dulub-Adesivos_corte.png" alt="" style="width:750px">
    <h4>Preservar o Meio Ambiente é obrigação de todos. Por isso a Dunax investe em Arla 32 com o objetivo
        de transformar o Planeta em um lugar melhor para viver.
    </h4>
</div> -->

@component('components.rodape')@endcomponent
@endsection