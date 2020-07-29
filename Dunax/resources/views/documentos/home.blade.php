@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Painel de Controle</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="mb-5">Bem vindo! O que deseja fazer?</h3>

                    @if(Auth::id() > 1 )
                        <!-- <a class="btn btn-outline-primary mr-3" href="{{ route('create') }}">Cadastrar Documento</a>
                        <a class="btn btn-outline-success mr-3" href="{{ route('show') }}">Listar Documentos</a> -->
                        <a class="btn btn-outline-primary mr-3" href="{{ route('pedido_tm') }}">Inserir Pedido Top Manager</a>
                        <a class="btn btn-outline-danger mr-3" href="{{ route('logout') }}">Sair</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
