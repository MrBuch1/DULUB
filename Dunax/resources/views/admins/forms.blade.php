@extends('layouts.app')
@component('components.navbar')@endcomponent

@section('content')
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<style>
    .hide {
        display: none;
    }
</style>

<script>
    function showKm() {
        document.getElementById('form_km').style.display='block';
        document.getElementById('form_desp').style.display='none';
    }

    function showDesp() {
        document.getElementById('form_desp').style.display='block';
        document.getElementById('form_km').style.display='none';
    }

    function getData() {
        var data_i = document.getElementById('data_i');
        var data_f = document.getElementById('data_f');
    }
</script>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Painel de Controle</div>
                    <div class="card-body">

                        <h5 class="mb-5"><strong>{{ $vendedor->name }}</strong></h5>
                        <label for="FormControlInput"><strong>Tipo de Relatório</strong></label>
                        <div class="form-group">
                            <input class="form-group-input" type="radio" name="relatorio" id="Radio1" value="Quilometragem" onclick="showKm();">
                            <label class="form-group-label" for="Radio1">
                            Quilometragem
                            </label>
                            <br>
                            <input class="form-group-input" type="radio" name="relatorio" id="Radio2" value="Despesas" onclick="showDesp();">
                            <label class="form-group-label" for="Radio2">
                            Despesas
                            </label>
                        </div>
                    </div>


                    <!-- FORMULÁRIO PARA FILTRAR QUILOMETROS -->
                    <form class="hide mt-n5" id="form_km" method="GET" action="../FormKms/{{ $vendedor->id }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">

                                <h4>Informe o período que deseja pesquisar</h4>
                            
                                <div class="form-group">
                                  
                                    <div class="form-group" name="data_i" id="data_i">
                                        <label class="form-group-label" for="datepicker"><strong>Data Inicial</strong></label>
                                        <input class="form-group-input" id="datepicker" name="data_inicial_km"/>
                                        <script>
                                            $('#datepicker').datepicker({
                                                uiLibrary: 'bootstrap4',
                                                format: 'dd/mm/yyyy'
                                            });
                                        </script>
                                    </div>                                    
                                    <div class="form-group mt-3" name="data_f" id="data_f">
                                        <label class="form-group-label" for="datepicker2"><strong>Data Final</strong></label>
                                        <input class="form-group-input" id="datepicker2" name="data_final_km"/>
                                        <script>
                                            $('#datepicker2').datepicker({
                                                uiLibrary: 'bootstrap4',
                                                format: 'dd/mm/yyyy'
                                            });
                                        </script>
                                    </div>
                                </div>
                            
                            <div class="card-body" id="btn_km">
                                <button type="submit" class="btn btn-primary mr-3">Confirmar</button>
                                <a href="/" class="btn btn-danger">Voltar</a>
                            </div>
                        </div>
                    </form>


                    <!-- FORMULÁRIO PARA FILTRAR DESPESAS -->
                    <form class="hide mt-n5" id="form_desp" method="GET" action="../FormDespesas/{{ $vendedor->id }}" enctype="multipart/form-data" autocomplete="off">
                    @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif
                        </div>

                        <div class="card-body">

                            <h4>Informe o período que deseja pesquisar</h4>
                            
                                <div class="form-group">
                                  
                                    <div class="form-group mt-3" name="data_i" id="data_i">
                                        <label class="form-group-label" for="datepicker3"><strong>Data Inicial</strong></label>
                                        <input class="form-group-input" id="datepicker3" name="data_inicial_desp"/>
                                        <script>
                                            $('#datepicker3').datepicker({
                                                uiLibrary: 'bootstrap4',
                                                format: 'dd/mm/yyyy'
                                            });
                                        </script>
                                    </div>                                    
                                    <div class="form-group mt-3" name="data_f" id="data_f">
                                        <label class="form-group-label" for="datepicker4"><strong>Data Final</strong></label>
                                        <input class="form-group-input" id="datepicker4" name="data_final_desp"/>
                                        <script>
                                            $('#datepicker4').datepicker({
                                                uiLibrary: 'bootstrap4',
                                                format: 'dd/mm/yyyy'
                                            });
                                        </script>
                                    </div>
                                </div>
                            
                            <div class="card-body" id="btn_km">
                                <button type="submit" class="btn btn-primary mr-3">Confirmar</button>
                                <a href="/" class="btn btn-danger">Voltar</a>
                            </div>
                        </div>
                    </form> 
                </div>                      
            </div>
        </div>
    </div>
</div>
@endsection
