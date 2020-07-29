@extends('layouts.app')
@section('content')
@component('components.navbar')@endcomponent

<div class="container-narrow">
    <img class="img-responsive img-fluid mb-5 shadow-lg" src="..\images\motocicletas.jpg" alt="" style="width:100%; margin-top:-525px; filter:brightness(50%);">
</div>

<div class="container">
    <h1 style="text-decoration:underline" align="center"><strong>LINHA MOTOCICLETAS</strong></h1>
</div>

<div class="container-fluid mt-5">
    <section class="container">
        <div class="row mb-5">
            @foreach ($registros as $registro)
            <div class="col-sm zoom" align="center">
                <a href="{{ route('produto', $registro->id) }}">
                    <img class="img-responsive container" src="../{{ $registro->imagem }}" alt="" style="width:250px">
                </a>
                <h5 class="mb-5" align="center"><strong>{{ $registro->nome }}</strong></h5>
            </div>
            @endforeach
            <div class="col-sm"></div>
            <div class="col-sm"></div>
        </div>
    </section>    
</div>

@component('components.rodape')@endcomponent
@endsection