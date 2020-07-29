@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

<div class="container-narrow">
    <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\industria.jpg" alt="" style="width:100%; margin-top:-425px; filter:brightness(50%);">
</div>

<section class="container mb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('hidra') }}">
                    <img src="..\images\escavadeira.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">HIDRÁULICOS</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('refri') }}">
                    <img src="..\images\refrigeracao.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">REFRIGERAÇÃO</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('compress') }}">
                    <img src="..\images\turbinas.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%)">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">COMPRESSORES/TURBINAS</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('eng_ind') }}">
                    <img src="..\images\engrenagens.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">ENGRENAGENS INDUSTRIAIS</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('term') }}">
                    <img src="..\images\aquecedor.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">TÉRMICOS</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('desmold') }}">
                    <img src="..\images\desmoldantes.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px;  filter:brightness(50%)">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">DESMOLDANTES</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm zoom mb-3">
                <a href="{{ route('textil') }}">
                    <img src="..\images\teares.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:300px; height:185px; filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">TÊXTIL</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3">
                <a href="{{ route('transform') }}">
                    <img src="..\images\transformador.jpg" alt="" class="img-responsive d-block shadow p-1" style="width:290px; height:185px;  filter:brightness(50%);">
                </a>
                <div class="container bottom-left" style="position:absolute; bottom:30px; left:16px; color:whitesmoke; font-weight:bold;">TRANSFORMADORES</div>
                <div class="container bottom-left" style="position:absolute; bottom:20px; left:16px; color:red; font-weight:bold; font-family: Arial">__________</div>
            </div>

            <div class="col-sm zoom mb-3"></div>
        </div>
    
    </div>
</section>


<!--

<div class="container">
    <h1 style="text-decoration:underline" align="center"><strong>LINHA INDUSTRIAL</strong></h1>
</div>

<div class="container mt-5 mb-3" align="center">
    <h3>
        <a href="{{ route('hidra') }}">HIDRÁULICOS</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('refri') }}">REFRIGERAÇÃO</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('compress') }}">COMPRESSORES/TURBINAS</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('eng_ind') }}">ENGRENAGENS INDUSTRIAIS</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('term') }}">TÉRMICOS</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('desmold') }}">DESMOLDANTES</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('textil') }}">TÊXTIL</a>
    </h3>
</div>

<div class="container mb-3" align="center">
    <h3>
        <a href="{{ route('transform') }}">TRANSFORMADORES</a>
    </h3>
</div>

-->

@component('components.rodape')@endcomponent
@endsection