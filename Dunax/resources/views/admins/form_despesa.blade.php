@extends('layouts.app')
@component('components.navbar')@endcomponent

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">Painel de Controle</div>
                    <div class="card-body">
                        <h5 class="mb-3">{{ $vendedor->name }}</h5>
                            <h5 class="mb-5">
                                <strong>Período da Pesquisa: 
                                    {{ Carbon\Carbon::parse($data_i)->format('d/m/Y') }}
                                    -
                                    {{ Carbon\Carbon::parse($data_f)->format('d/m/Y') }} 
                                </strong>
                            </h5>
                        <table class="table">
                            <thead class="thead-light">
                              <tr>
                                <th scope="col">Tipo Despesa</th>
                                <th scope="col">Data</th>
                                <th scope="col">Valor</th>
                                <th scope="col">Comprovante</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($period as $p)
                                    <?php 
                                        $form_desp = Illuminate\Support\Facades\DB::table('formdespesas')
                                                ->where('id_vendedor', $vendedor->id)
                                                ->where('data_periodo', $p)
                                                ->get()
                                    ?>
                                    @foreach($form_desp as $d)
                                        <tr>
                                            <th scope="row">{{ $d->tipo_despesa }}</th>
                                            <td>{{ Carbon\Carbon::parse($d->data_periodo)->format('d/m/Y') }}</td>                                
                                            <td>{{ $d->valor }}</td>
                                            <td>
                                                <img class="img-thumbnail mr-n5" style="width:50%" src="{{ asset("storage/$d->imagem_comprovante") }}" alt="Comprovante">
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>

                        <a class="btn btn-outline-danger mt-5" href="../Forms/{{ $vendedor->id }}">VOLTAR</a>
                    </div>
                </div>                      
            </div>
        </div>
    </div>
</div>
@endsection
