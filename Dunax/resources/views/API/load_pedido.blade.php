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

    <div style="display:none">
        <form action="/teste-pedido" method="GET" name="enviar_pedido">
            <label for="cliente">Cliente - {{$clienteID}}</label>
            <select class="selectpicker mb-3" name="cliente" id="cliente" data-live-search="true">        
                <option data-tokens="{{ $clienteID }}" value="{{ $clienteID }}">{{ $clienteID }}</option>          
            </select>

            <button type="submit">Link do Pedido</button>
        </form>

        <script type="text/javascript">
            window.onload = function(){
                document.forms['enviar_pedido'].submit();
            }
        </script>
    </div>

    <div class="container-fluid">
        <h1 class="display-1">Você está sendo redirecionado para o resumo do pedido...</h1>
    </div>

  </body>
</html>