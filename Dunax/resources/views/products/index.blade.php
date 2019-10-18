@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container-fluid">
    <img class="img-responsive container-fluid mb-5" src="..\images\wallpaper-otto.jpg" alt="" style="margin-top:-125px; filter:brightness(50%)">
</div>

<div class="container-fluid mt-5">
    <section class="container-fluid">
        <div class="container">
            <div class="row mb-5">
                @foreach ($registros as $registro)
                <div class="col-sm">
                    <img class="img-responsive container" src="../{{ $registro->imagem }}" alt="" style="width:350px">
                    <h3 class="mb-5" align="center"><strong>{{$registro->nome}}</strong></h3>
                </div>
                @endforeach
            </div>
        </div>
    </section>    
</div>