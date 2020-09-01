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
  <form action="/json-api7" method="GET">
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

      <label for="finalidade">Finalidade</label>
      <select class="selectpicker mb-3" name="finalidade" id="finalidade" data-live-search="true">
          <option data-tokens="{{ $finalidadeID }}" value="{{ $finalidadeID }}">{{ $finalidadeID }}</option>
      </select>

      <br>

      <label for="centroCustos">Centro de Custos</label>
      <select class="selectpicker mb-3" name="centroCustos" id="centroCustos" data-live-search="true">
          <option data-tokens="{{ $centroCustosID }}" value="{{ $centroCustosID }}">{{ $centroCustosID }}</option>
      </select>

      <br>

      <label for="atividade">Atividade</label>
      <select class="selectpicker mb-3" name="atividade" id="atividade" data-live-search="true">
          <option data-tokens="{{ $atividadeID }}" value="{{ $atividadeID }}">{{ $atividadeID }}</option>
      </select>

      <br>

      <label for="quantidade">Quantidade</label>
      <select class="selectpicker mb-3" name="quantidade" id="quantidade" data-live-search="true">
          <option data-tokens="{{ $quantidade }}" value="{{ $quantidade }}">{{ $quantidade }}</option>
      </select>
    </div>

    <div class="card">
      <h3 class="card-header">Finalizar Pedido</h3>
      <div class="card-body" id="formObj">
        <label for="cliente"><strong>Cliente: <strong></label>
          <select class="selectpicker mb-3" name="cliente" id="cliente" data-live-search="true">
            @foreach($cliente as $c)
              @if($c['id'] == $clienteID)
                <option data-tokens="{{ $c['id'] }}" value="{{ $c['id'] }}">{{ $clienteID }} - {{ $c['razaoSocial'] }}</option>
              @endif
            @endforeach
          </select>

        <br> <hr>

        <h4><strong>OBJETOS</strong></h4>
        <br>

        @foreach($objs as $index_obj => $o)
          @foreach($objeto as $obj)
            @if($o == $obj['id'])
                <label name="objname[]" for="objs">Objeto: <strong>{{ $o }} - {{ $obj['nome'] }}</strong></label>
                <input type="checkbox" name="objs[]" id="objs" checked="checked" value="{{ $o }}">
                <br>

                @php
                    {{
                      $precoBase = max(json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/objetododetalhedapoliticadeprecos/consultartabeladeprecos?clienteID=' . $clienteID . '&objetoID=' . $o,
                          ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true));                      
                    }}        
                @endphp
                  <!-- EXISTEM PRODUTOS QUE NÃO CONSTAM NA CONSULTA DE TABELA DE PREÇOS 
                    E ACABAM RETORNANDO ERRO DE CONSULTA. EXEMPLO: PRODUTO ID 92 --> 
                
                  <label for="precoBase">Preço Base: <strong>R${{ $precoBase['precoBase'] }}</strong></label>
                  <input type="checkbox" name="precoBase[]" id="precoBase" checked="checked" value="{{ $precoBase['precoBase'] }}">
                  <br>

                <label for="qtds">Quantidade: <strong>{{ $qtds[$index_obj] }}</strong></label>
                <input type="checkbox" name="qtds[]" id="qtds" checked="checked" value="{{ $qtds[$index_obj] }}">
                <br>

                @foreach($unidade as $und)
                  @if($obj['id'] == $o && $obj['unidadeComercialID'] == $und['id'])
                    <label for="unidade">Unidade de Medida do produto: <strong>{{ $und['nome'] }}</strong></label>       
                    <input type="checkbox" name="unidade[]" value="{{ $und['id'] }}" checked="checked"> 
                    <br> 
                  @endif
                @endforeach

                  <label for="precoEfetivo"><strong>Preço Efetivo</strong></label>
                  <input id="precoEfetivo" name="precoEfetivo[]" type="text" placeholder="Preço Efetivo" required>
              
                
                <br> <hr> <br>

            @endif
          @endforeach
        @endforeach

        <input class="btn btn-info" id="precoEfetivos" type="button" value="Confirmar Preços Efetivos" onclick="myFunction()">
         

      </div>
    </div>

    <button class="btn btn-outline-success ml-3 mt-5" type="submit">Inserir Pedido</button>
      <a class="btn btn-danger ml-3 mt-5" href="javascript:history.back()">Voltar</a>
  </form>

  <script>

      function myFunction() {
        var precoB = document.getElementsByName('precoBase[]');
        var precoE = document.getElementsByName('precoEfetivo[]');

        var divForm = document.getElementById('formObj');

        var divPE = document.createElement("div");
        divPE.setAttribute("class", "mt-3");

        var corrigir = document.createElement("input");
        corrigir.setAttribute("id", "corrigir");
        corrigir.setAttribute("class", "btn btn-warning mt-3");
        corrigir.setAttribute("type", "button");
        corrigir.setAttribute("value", "Corrigir");
        corrigir.onclick = function() {divForm.removeChild(divPE);};

        for(i = 0; i < precoB.length; i++)
        {
          var precoB = document.getElementsByName('precoBase[]')[i].value;
          var precoE = document.getElementsByName('precoEfetivo[]')[i].value;
          var objeto = document.getElementsByName('objname[]')[i].textContent;

          var desconto = (1 - (precoE / precoB)) / 100;
        
          //alert(desconto[0]);

          //var divPE = document.getElementById('divPE');

          var divInfo = document.createElement("div");
          divInfo.setAttribute("id", "desconto")
          divInfo.textContent = "Desconto Efetivo - " + objeto + " = " + (((desconto * 10000) * -1).toFixed(2)) + "%.";
          
          divPE.appendChild(divInfo);
          divPE.appendChild(corrigir);
          divForm.appendChild(divPE);
        }
      }

  </script>

  </body>
</html>