@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container-fluid">
    <img class="image-responsive container-fluid mb-5" src="images\imagem_contato.jpg" alt="" style="margin-top:-250px; height:800px; filter:brightness(50%)">
</div>

<div class="container">
    <h1 align="center"><strong>Faça a devolução da sua compra por aqui!</strong></h1>
    <h3>É simples e rápido, basta clicar no botão "CONTINUAR" abaixo que você será redirecionado(a) ao nosso sistema 
        para prosseguir.
    </h3>
    
    <div class="container mt-5" align="center">
        <a href="http://131.0.244.102:8015/workflow/wfportal.aspx?&inpRedirectURL=%252fworkflow%252fwftoday.aspx&inpLostSession=1" 
        class="btn btn-outline-danger mb-5">CONTINUAR</a>
    </div>
    
</div>

@component('components.rodape')@endcomponent