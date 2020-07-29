@extends('layouts.app')

@section('content')
<div class="container">
  <form action="/CadastrarDocumento" method="POST" enctype="multipart/form-data" autocomplete="off">
    @csrf
    <div class="form-group">
      <h5 class="form-group"><strong>Selecione a empresa</strong></h5>
      <select class="form-group" name="empresa" id="Empresa">
        <option value="DUNAX LUBRIFICANTES - CAIXA - CC: 147-0">DUNAX LUBRIFICANTES - CAIXA - CC: 147-0</option>
        <option value="DUNAX LUBRIFICANTES - BB - CC: 22933-4">DUNAX LUBRIFICANTES - BB - CC: 22933-4</option>
        <option value="DULUB LUBRIFICANTES - BB - CC: 107146-7">DULUB LUBRIFICANTES - BB - CC: 107146-7</option>
        <option value="DUNAS DISTRIBUIDORA - BB - CC: 11920-2">DUNAS DISTRIBUIDORA - BB - CC: 11920-2</option>
      </select>
    </div>

    <div class="form-group">
      <h5 class="mt-3"><strong>Informe a data do crédito</strong></h5>
      <div class="form-group" name="data" id="data">
        <input type="date" class="form-group" name="data" required>
    </div>

    <div class="form-group">
      <h5 class="mt-3"><strong>Informe o valor do crédito</strong></h5>
      <input class="form-group" type="text" name="valor" required>
    </div>

    <div class="form-group">
      <h5 class="mt-3"><strong>Informe a referência do crédito (caso houver)</strong></h5>
      <input class="form-group" type="text" name="referencia">
    </div>

    <div class="form-group">
      <h5 class="mt-3"><strong>Informe o nome do cliente (caso houver)</strong></h5>
      <input class="form-group" type="text" name="cliente">
    </div>

    <div class="form-group">
      <h5 class="mt-3"><strong>Lançado no Top Manager?</strong></h5>
      <input class="form-group" type="radio" name="top" id="Radio1" value="Sim" required>
      <label class="form-group mr-4" for="Radio1">Sim</label>

      <input class="form-group" type="radio" name="top" id="Radio2" value="Não" required>
      <label class="form-group" for="Radio2">Não</label>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-outline-primary mt-3 mr-3">Confirmar</button>
      <a href="/home" class="btn btn-outline-danger mt-3 mr-3">Cancelar</a>
    </div>
  </form>
</div>
@endsection