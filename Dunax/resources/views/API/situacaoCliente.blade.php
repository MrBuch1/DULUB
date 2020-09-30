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

    <form action="/json-api2" method="GET">
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
      </div>

    <div class="card">
      <h3 class="card-header">Situação do Cliente</h3>
      <div class="card-body">

        <div class="form-group">
            @foreach($cliente as $cli)
                @if($cli['id'] == $clienteID)
                    <h3>Cliente: <strong>{{ $clienteID }} - {{ $cli['razaoSocial'] }}</strong></h3>
                    <hr>
                @endif
            @endforeach

            @if(empty($situacaoCliente))
              <h5><b><i><u>Não há situações em aberto para este cliente.</u></i></b></h5>
            @else
              <span class="badge badge-success text-light">Em Aberto</span>
              <span class="badge badge-danger text-light">Vencido</span>
              
              <table class="table table-hover table-sm">
                <thead>
                  <tr class="table-secondary">
                    <th scope="col">ID do Documento</th>
                    <th scope="col">Data de Emissão</th>
                    <th scope="col">Data de Vencimento</th>
                    <th scope="col">Valor Emitido ao Cliente</th>
                    <th scope="col">Valor Recebido do Cliente</th>
                    <th scope="col">Saldo Devedor do Cliente</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($situacaoCliente as $sc)
                    @if(substr($sc['dataVencimento'], 0, 10) >= $dataHoje)
                      <tr class="table-success">
                    @else
                      <tr class="table-danger">
                    @endif
                      <th>{{ $sc['documentoID'] }}</th>
                      <td>{{ date('d/m/Y', strtotime(substr($sc['dataEmissao'], 0, 10))) }}</td>
                      <td>{{ date('d/m/Y', strtotime(substr($sc['dataVencimento'], 0, 10))) }}</td>
                      <td>R${{ $sc['valorEmitido'] }}</td>

                      @if(array_key_exists('valorRecebido', $sc))
                        <td>R${{ $sc['valorRecebido'] }}</td>
                      @else
                        <td>Não há valor recebido para este documento.</td>
                      @endif

                      <td>R${{ $sc['valorAReceber'] }}</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

              <h3>Total dos débitos: <strong>R${{ $somaDebitos }}</strong></h3>
            @endif
        </div>
      </div>
    </div>

      <button class="btn btn-success ml-3 mt-5" type="submit">Continuar</button>
      <a class="btn btn-danger ml-3 mt-5" href="javascript:history.back()">Voltar</a>
    </form>

  </body>
</html>