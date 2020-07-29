@extends('layouts.app')

@section('content')
<div class="container">
  <table class="table table-hover">
    <thead>
      <th scope="col">Banco</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col">Cliente</th>
      <th scope="col">Referência</th>
      <th scope="col">Top Manager</th>
    </thead>
    <tbody>
      @foreach($docs as $doc)
        <tr>
          <td>{{ $doc->banco }}</td>
          <td>{{ $doc->valor }}</td>
          <td>{{ Carbon\Carbon::parse($doc->data_credito)->format('d/m/Y') }}</td>

          @if($doc->cliente == NULL)
            <td>//</td>
          @else
            <td>{{ $doc->cliente }}</td>
          @endif

          @if($doc->referencia == NULL)
            <td>//</td>
          @else
            <td>{{ $doc->referencia }}</td>
          @endif

          @if($doc->topmanager == "Sim")
            <td style="color:green">{{ $doc->topmanager }}</td>
          @else
            <td style="color:red">{{ $doc->topmanager }}</td>
          @endif

          @if(Auth::id() >4)
            <td><a class="btn btn-warning" href="/EditarDocumento/{{ $doc->id }}">Editar</button></td>
          @endif
        </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection