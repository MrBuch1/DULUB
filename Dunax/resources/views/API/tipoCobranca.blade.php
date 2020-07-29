<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
  </head>

  <body>
  <form action="/json-api4" method="GET">
  @csrf

    <div style="display:none">
      <label for="empresa">Empresa</label>
      <select class="selectpicker mb-3" name="empresa" id="empresa" data-live-search="true">
        <option data-tokens="{{ $empresaID }}" value="{{ $empresaID }}">{{ $empresaID }}</option>
      </select>

      <br>

      <label for="tipoOP">Tipo de Operação</label>
      <select class="selectpicker mb-3" name="tipoOP" id="tipoOP" data-live-search="true">        
          <option data-tokens="{{ $opID }}" value="{{ $opID }}">{{ $opID }}</option>        
      </select>

      <br>

      <label for="cliente">Cliente</label>
      <select class="selectpicker mb-3" name="cliente" id="cliente" data-live-search="true">        
            <option data-tokens="{{ $clienteID }}" value="{{ $clienteID }}">{{ $clienteID }}</option>          
      </select>

      <label for="moeda">Moeda</label>
      <select class="selectpicker mb-3" name="moeda" id="moeda" data-live-search="true">        
            <option data-tokens="{{ $moedaID }}" value="{{ $moedaID }}">{{ $moedaID }}</option>          
      </select>

      <label for="vendedor">Vendedor</label>
      <select class="selectpicker mb-3" name="vendedor" id="vendedor" data-live-search="true">        
            <option data-tokens="{{ $vendedorID }}" value="{{ $vendedorID }}">{{ $vendedorID }}</option>          
      </select>

      <label for="agCobrador">Agente Cobrador</label>
      <select class="selectpicker mb-3" name="agCobrador" id="agCobrador" data-live-search="true">        
            <option data-tokens="{{ $agente }}" value="{{ $agente }}">{{ $agente }}</option>          
      </select>
    </div>
    
    <div class="card">
      <h3 class="card-header">Tipo de Cobrança</h3>
      <div class="card-body">
        <label for="tipoCobranca"><strong>Tipo de Cobrança: </strong></label>
        <select class="selectpicker mb-3" name="tipoCobranca" id="tipoCobranca" data-live-search="true">
          @foreach($TiposCobranca as $tc1 => $tc2)
            <option data-tokens="{{ $tc1 }}" value="{{ $tc1 }}">{{ $tc2 }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <button class="btn btn-success ml-3 mt-5" type="submit">Continuar</button>
      <a class="btn btn-danger ml-3 mt-5" href="/json-api2">Voltar</a>
  </form>
  </body>
</html>