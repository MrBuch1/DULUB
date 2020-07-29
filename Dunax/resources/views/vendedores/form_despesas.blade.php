@extends('layouts.app')
@component('components.navbar')@endcomponent

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Painel de Controle</div>
                    <form action="/FormDespesas" method="POST" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3>Formulário de controle de despesas</h3>
                            <br>
                            <h5><strong>Insira as informações requisitadas abaixo</strong></h5>
                        </div>

                        <div class="card-body">
                            <h5>Tipo da Despesa</h5>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="Radio1" value="Hospedagem">
                                <label class="form-check-label" for="Radio1">
                                    Hospedagem
                                </label>
                                </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="Radio2" value="Alimentação">
                                <label class="form-check-label" for="Radio2">
                                    Alimentação
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="Radio3" value="Deslocamento">
                                <label class="form-check-label" for="Radio3">
                                    Deslocamento
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tipo" id="Radio4" value="Outras">
                                <label class="form-check-label" for="Radio4">
                                    Outras
                                </label>
                            </div>

                            <h5 class="mt-4">Data da Despesa</h5>
                            <div class="form-group" name="data" id="data">
                                <label class="form-group-label" for="datepicker_desp"></label>
                                <input class="form-group-input" id="datepicker_desp" name="data"/>
                                <script>
                                    $('#datepicker_desp').datepicker({
                                        uiLibrary: 'bootstrap4',
                                        format: 'dd/mm/yyyy'
                                    });
                                </script>
                            </div>

                            <h5 class="mt-4">Valor</h5>
                            <input type="text" class="form-control" id="Valor" name="valor" placeholder="Valor">

                            <h5 class="mt-4">Recibo ou Nota Fiscal</h5>
                            <input type="file" class="form-control-file" name="imagem_comprovante">
                            
                            <button class="btn btn-outline-primary mr-3 mt-5" type="submit">Confirmar</button>

                            <button class="btn btn-outline-danger mr-3 mt-5" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                    {{ __('Sair') }}
                            </button>
                        </div>
                    </form> 
                </div>                      
            </div>
        </div>
    </div>
</div>
@endsection
