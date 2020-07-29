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

  <script>
      function myFunction() {        
        var precoB = document.getElementById('precoBase').value;
        var precoE = document.getElementById('precoEfetivo').value;
        var desconto = (precoE - precoB);

        var form = document.getElementById('form');

        var div = document.createElement("div");
        div.textContent = "Desconto incluso = " + desconto;

        var button = document.createElement("button");
        button.textContent="Continuar";
        button.setAttribute('type', 'submit');

        form.appendChild(div);
        form.appendChild(button);

      }
  </script>
  <form action="/json-api7" method="GET" id="form">
  @csrf
    <label for="cliente">Cliente</label>
      <select class="selectpicker mb-3" name="cliente" id="cliente" data-live-search="true">
        @foreach($cliente as $c)
          @if($c['id'] == $clienteID)
            <option data-tokens="{{ $c['id'] }}" value="{{ $c['id'] }}">{{ $c['razaoSocial'] }}</option>
          @endif
        @endforeach
      </select>

    <br>
    
    <label for="objeto">Objeto</label>
      <select class="selectpicker mb-3" name="objeto" id="objeto" data-live-search="true">
        @foreach($objeto as $obj)
          @if($obj['id'] == $objetoID)
            <option data-tokens="{{ $obj['id'] }}" value="{{ $obj['id'] }}">{{ $obj['nome'] }}</option>
          @endif
        @endforeach
      </select>

    <br>

    <label for="precoBase">Preço Base</label>
    <select class="selectpicker mb-3" name="precoBase" id="precoBase" data-live-search="true">
    @foreach($precoBase as $pb)
        @if($objetoID == $pb['objetoID'])          
          <option data-tokens="{{ $pb['tabelaID'] }}" value="{{ $pb['precoBase'] }}">Preço: {{ $pb['precoBase'] }} - Prazo: {{ $pb['prazoMedio'] }}</option>  
        @endif
    @endforeach
    </select>

    <br>

    <label for="precoEfetivo">Preço Efetivo</label>
    <input id="precoEfetivo" type="text" placeholder="Preço Efetivo">
    <input type="button" value="Confirmar Preço Efetivo" onclick="myFunction()">

    <br>
  </form>
  </body>
</html>