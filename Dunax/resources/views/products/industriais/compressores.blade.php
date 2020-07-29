@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

<div class="container-narrow">
    <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\turbinas.jpg" alt="" style="width:100%; margin-top:-610px; filter:brightness(50%);">
</div>

<div class="container">
    <h1 style="text-decoration:underline" align="center"><strong>LINHA COMPRESSORES/TURBINAS</strong></h1>
</div>

<div class="container-fluid mt-5">
    <section class="container">
        <div class="row mb-5">
            @foreach ($registros as $registro)
            <div class="col-sm zoom" align="center">
                <a href="{{ route('produto', $registro->id) }}">
                    <img class="img-responsive container" src="../{{ $registro->imagem }}" alt="" style="width:250px">
                </a>
                <h4 class="mb-5" align="center"><strong>{{ $registro->nome }}</strong></h4>
            </div>
            @endforeach
        </div>
    </section>    
</div>

@component('components.rodape')@endcomponent
@endsection