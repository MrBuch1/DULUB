@extends('layouts.app')
@component('components.navbar')@endcomponent

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Painel de Controle</div>
                    <div class="card-body">
                        <h3>Escolha qual formulário deseja preencher:</h3>
                        <a class="btn btn-outline-primary mr-3 mt-5" href="{{ route('formKm') }}">Formulário de Quilometragem</a>
                        <a class="btn btn-outline-success mr-3 mt-5" href="{{ route('formDespesas') }}">Formulário de Despesas</a>
                        <button class="btn btn-outline-danger mr-3 mt-5" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                {{ __('Sair') }}
                        </button>
                    </div>
                </div>                      
            </div>
        </div>
    </div>
</div>
@endsection