@extends('layouts.app')

@section('content')
@if(Auth::id() <= 4)
  <div class="container">
    <p class="display-3">Você não tem permissão para acessar essa página.</p>
  </div>
@else
<div class="container">
  <form action="/EditarDocumento/{{ $doc->id }}" method="POST">
  @csrf
    <div class="form-group">
      <h4 class="form-group"><strong>{{ $doc->banco }}</strong></h4>
      <h4 class="form-group"><strong>VALOR: {{ $doc->valor }}</strong></h4>
      <h4 class="form-group"><strong>DATA: {{Carbon\Carbon::parse($doc->data_credito)->format('d/m/Y') }}</strong></h4>
      
      @if($doc->topmanager == "Sim")
        <h4 class="form-group"><strong>TOP MANAGER: <strong style="color:green">{{ $doc->topmanager }}</strong></strong></h4>
      @else
        <h4 class="form-group"><strong>TOP MANAGER: <strong style="color:red">{{ $doc->topmanager }}</strong></strong></h4>
      @endif

      @if($doc->cliente == NULL && $doc->referencia != NULL)
        <h4 class="form-group"><strong>REFERÊNCIA: {{ $doc->referencia }}</strong></h4>
        <div class="form-group mt-5">
          <h5><strong>Informe o cliente</strong></h5>
          <input type="text" name="cliente" id="Cliente">
        </div>
      @endif

      @if($doc->cliente != NULL && $doc->referencia == NULL)
        <h4 class="form-group"><strong>CLIENTE: {{ $doc->cliente }}</strong></h4>
        <div class="form-group mt-5">
          <h5><strong>Informe a referência</strong></h5>
          <input type="text" name="referencia" id="Referencia">
        </div>
      @endif

      @if($doc->cliente == NULL && $doc->referencia == NULL)
        <div class="form-group mt-5">
          <h5><strong>Informe o cliente</strong></h5>
          <input type="text" name="cliente" id="Cliente">
        </div>

        <div class="form-group">
          <h5><strong>Informe a referência</strong></h5>
          <input type="text" name="referencia" id="Referencia">
        </div>
      @endif

      <div class="form-group">
        <button class="btn btn-outline-primary mr-3" type="submit">Confirmar</button>
        <a class="btn btn-outline-danger mr-3" href="/ListarDocumentos">Voltar</a>
      </div>
    </div>
  </form>
</div>
@endif

@endsection