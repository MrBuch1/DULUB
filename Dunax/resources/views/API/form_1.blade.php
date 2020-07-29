

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

    <form action="/situacaoCliente" method="GET">
    @csrf

    <div class="card">
      <h3 class="card-header">Início</h3>
      <div class="card-body">
        <div class="form-group">
          <label for="empresa"><strong>Empresa: </strong></label>
          <select class="selectpicker mb-3" name="empresa" id="empresa" data-live-search="true">
            @foreach($empresa as $e)
              <option data-tokens="{{ $e['id'] }}" value="{{ $e['id'] }}">{{ $e['nome'] }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="vendedor"><strong>Vendedor: </strong></label>
          <select class="selectpicker mb-3" name="vendedor" id="vendedor" data-live-search="true">
            @foreach($vendedor as $v)
              @if($v['id'] == Illuminate\Support\Facades\Auth::id())
                <option data-tokens="{{ $v['id'] }}" value="{{ $v['id'] }}">{{ $v['nome'] }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="tipoOP"><strong>Tipo de Operação: </strong></label>
          <select class="selectpicker mb-3" name="tipoOP" id="tipoOP" data-live-search="true">
            @foreach($tipoOP as $top)
              @if($top['id'] == 164 || $top['id'] == 172)
                <option data-tokens="{{ $top['id'] }}" value="{{ $top['id'] }}">{{ $top['nome'] }}</option>
              @endif
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="cliente"><strong>Cliente: </strong></label>
          <select class="selectpicker mb-3" name="cliente" id="cliente" data-live-search="true">
            @foreach($cliente as $c)
              <option data-tokens="{{ $c['id'] }}" value="{{ $c['id'] }}">{{ $c['id'] }} - {{ $c['razaoSocial'] }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>

      <button class="btn btn-success ml-3 mt-5" type="submit">Continuar</button>
    </form>

  </body>
</html>