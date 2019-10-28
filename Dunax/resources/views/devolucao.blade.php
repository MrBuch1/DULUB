@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container-fluid">
    <img class="img-fluid img-responsive container-fluid mb-5" src="images\imagem_contato_new.jpg" alt="" style="margin-top:-250px;">
</div>

<div class="container">
    <h1 align="center"><strong>Faça a devolução da sua compra por aqui!</strong></h1>
    <h3>É simples e rápido, basta clicar no botão "CONTINUAR" abaixo que você será redirecionado(a) ao nosso sistema 
        para prosseguir.
    </h3>
    
    <div class="container mt-5" align="center">
        <a href="https://dulub.orquestrabpm.com.br/workflow/wfflow_execute_embed.aspx?c=FriVZ0JUHxmLhu%2foqrZQrRCHLWPQbteMedhbk3gCeCns%2fAfUPOQ13LwZoJj2QfWCn%2bydH8eMBW7YEghjUdLJHQ%3d%3d" 
        class="btn btn-outline-danger mb-5" target="_blank">CONTINUAR</a>
    </div>
    
</div>

@component('components.rodape')@endcomponent