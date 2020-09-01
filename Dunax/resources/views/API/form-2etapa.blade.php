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
  <form action="/json-api6" method="GET">
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

      <label for="tipoCobranca">Tipo de Cobrança</label>
      <select class="selectpicker mb-3" name="tipoCobranca" id="tipoCobranca" data-live-search="true">        
            <option data-tokens="{{ $tipoCobrancaID }}" value="{{ $tipoCobrancaID }}">{{ $tipoCobrancaID }}</option>
      </select>

      <label for="formaPagamento">Forma de Pagamento</label>
      <select class="selectpicker mb-3" name="formaPagamento" id="formaPagamento" data-live-search="true">
              <option data-tokens="{{ $formaPagamentoID }}" value="{{ $formaPagamentoID }}">{{ $formaPagamentoID}}</option>
      </select>

      <label for="obs">Observação</label>
      <select class="selectpicker mb-3" name="obs" id="obs" data-live-search="true">
              <option data-tokens="{{ $observacao }}" value="{{ $observacao }}">{{ $observacao}}</option>
      </select>

      <label for="comInterna">Comunicação Interna</label>
      <select class="selectpicker mb-3" name="comInterna" id="comInterna" data-live-search="true">
              <option data-tokens="{{ $comInterna }}" value="{{ $comInterna }}">{{ $comInterna}}</option>
      </select>
    </div>

    <div class="card">
      <h3 class="card-header">Objetos</h3>
      <div class="card-body">
        <div id="formObj">

          <div class="form-group">
            <label for="objeto"><strong>Objeto: </strong></label>
            <select class="selectpicker mb-3" name="objeto" id="objeto" data-live-search="true">
              @foreach($objeto as $obj)
                @if($obj['ativo'] == 'Sim')
                  <option data-tokens="{{ $obj['id'] }}" value="{{ $obj['id'] }}">{{ $obj['nome'] }}</option>
                @endif
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="quantidade"><strong>Quantidade: </strong></label>
            <input type="text" placeholder="Quantidade" name="quantidade" id="qtd">
            <input class="btn btn-info" type="button" value="Adicionar mais objetos" onclick="addObj()">
          </div>

        </div>

        <div class="form-group">
          <label for="finalidade"><strong>Finalidade: </strong></label>
          <select class="selectpicker mb-3" name="finalidade" id="finalidade" data-live-search="true">
              <option data-tokens="{{ $finalidade[1]['id'] }}" value="{{ $finalidade[1]['id'] }}">{{ $finalidade[1]['nome'] }}</option>
            @if($empresaID == 45)
              <option data-tokens="{{ $finalidade[14]['id'] }}" value="{{ $finalidade[14]['id'] }}">{{ $finalidade[14]['nome'] }}</option>
            @endif
          </select>
        </div>
        
        <div class="form-group">
          <label for="centroCustos"><strong>Centro de Custos: </strong></label>
          <select class="selectpicker mb-3" name="centroCustos" id="centroCustos" data-live-search="true">
              <option data-tokens="{{ $centroCustos[1]['id'] }}" value="{{ $centroCustos[1]['id'] }}">{{ $centroCustos[1]['nome'] }}</option>
          </select>
        </div>

        <div class="form-group">
          <label for="atividade"><strong>Atividade: </strong></label>
          <select class="selectpicker mb-3" name="atividade" id="atividade" data-live-search="true">
            @foreach($atividade as $atv)
              <option data-tokens="{{ $atv['id'] }}" value="{{ $atv['id'] }}">{{ $atv['nome'] }}</option>
            @endforeach
          </select>
        </div>

      </div>
    </div>

    <button class="btn btn-success ml-3 mt-5" type="submit">Continuar</button>
      <a class="btn btn-danger ml-3 mt-5" href="javascript:history.back()">Voltar</a>
  </form>

<script>

    function addObj() {
      var obj = document.getElementById('objeto').value;
      var qtd = document.getElementById('qtd').value;

      var divForm = document.getElementById('formObj');

      var div = document.createElement("div");

      var checkObj = document.createElement("input");
      checkObj.setAttribute("type", "checkbox");
      checkObj.setAttribute("name", "objs[]");
      checkObj.setAttribute("id", "objs");
      checkObj.setAttribute("value", obj);
      checkObj.setAttribute("checked", "checked");

      var checkQtd = document.createElement("input");
      checkQtd.setAttribute("type", "checkbox");
      checkQtd.setAttribute("name", "qtds[]");
      checkQtd.setAttribute("id", "qtds");
      checkQtd.setAttribute("value", qtd);
      checkQtd.setAttribute("checked", "checked");

      var labelObj = document.createElement("label");
      labelObj.setAttribute("for", "objs");

      var labelQtd = document.createElement("label");
      labelQtd.setAttribute("for", "qtds");
      
      var objLabel = document.createTextNode("Objeto: " + obj + " // ");
      var qtdLabel = document.createTextNode("Quantidade: " + qtd);

      labelObj.appendChild(objLabel);
      labelQtd.appendChild(qtdLabel);
      div.appendChild(checkObj);
      div.appendChild(objLabel);
      div.appendChild(checkQtd);
      div.appendChild(qtdLabel);
      divForm.appendChild(div);
    }

</script>

  </body>
</html>