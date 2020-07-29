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
                    <form method="GET" action="" enctype="multipart/form-data">
                    @csrf
                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <h3>Controle de Vendedores - {{ $user->name }}</h3>
                            <br>
                        </div>

                        <div class="card-body">

                            <h5 class="form-group">Selecione o vendedor</h5>

                            @foreach($vendedores as $v)
                            <a href="Forms/{{ $v->id }}">{{ $v->name }}</a><br>
                            @endforeach

                           <!--  @foreach($vendedores as $v)
                                <h5>{{ $v->name }}</h5>
                                <a class="btn btn-outline-info mr-3 mb-3" href="FormKm/{{ $v->id }}">Quilometragem</a>
                                <a class="btn btn-outline-warning mb-3" href="FormDespesas/{{ $v->id }}">Despesas</a>
                            @endforeach -->
                            
                            <div class="card-body">
                                <button class="btn btn-outline-danger mr-3 mt-5" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        {{ __('Sair') }}
                                </button>
                            </div>
                        </div>
                    </form> 
                </div>                      
            </div>
        </div>
    </div>
</div>
@endsection
