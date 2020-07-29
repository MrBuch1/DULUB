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

    <div class="card">
        <h3 class="card-header">Pedido inserido com sucesso!</h3>
        <div class="card-body">
            <h1>Número do pedido: <strong>{{ $store }}</strong></h1>

            <br><br><br>
            
            <h3><strong>Razão Social do Cliente: </strong>{{ $body['cliente']['razaoSocial'] }}</h3>
            <h3><strong>CNPJ do Cliente: </strong>{{ $body['cliente']['cnpJouCPF'] }}</h3>

            <h3><strong>Produtos:</strong></h3>

            <table class="table table-hover">
                <thead>
                    <tr class="table-success">
                        <th scope="col">Objetos</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col">Valor Unitário</th>
                        <th scope="col">Valor Total dos Objetos</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($body['itens'] as $itens)
                        @foreach($objeto as $obj)
                            @if($itens['objetoID'] == $obj['id'])

                                @php
                                    {{
                                    $precoBase = max(json_decode($client->request('GET', 'https://visions.topmanager.com.br/Servidor_2.1.1_api/forcadevendas/objetododetalhedapoliticadeprecos/consultartabeladeprecos?clienteID=' . $clienteID . '&objetoID=' . $itens['objetoID'],
                                        ['headers' => ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $token]])->getBody(), true));                      
                                    }}              
                                @endphp
                                <tr>
                                    <th scope="row">{{ $itens['objetoID'] }} - {{ $obj['nome'] }} </th>
                                    <td>{{ $itens['quantidade'] }}</td>
                                    <td>R${{ $precoBase['precoBase'] }}</td>
                                    <td>R${{ $itens['valorMercadoria'] }}</td>
                                </tr>
                            @endif
                        @endforeach
                    @endforeach
                </tbody>
            </table>

            <h3><strong>Valor Total do Pedido: </strong>R${{ $itens['valorMercadoria'] }}</h3>
            
            <a class="btn btn-primary mt-5" href="/">Inserir novo pedido</a>
            <br><br>
            <a class="btn btn-danger" href="/logout">Sair</a>

            
        </div>
    </div>

  </body>
</html>