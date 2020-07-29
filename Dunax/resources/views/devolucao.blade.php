@extends('layouts.app')
@component('components.navbar')@endcomponent

<div class="container-narrow">
    <img class="img-fluid img-responsive mb-5 shadow-lg" src="images\imagem_contato_new2.jpg" alt="" style="width:100%; margin-top:-250px;">
</div>

<div class="container">
    <h1 class="mb-5" align="center"><strong>Faça sua solicitação por aqui!</strong></h1>
    <h3>É simples e rápido, basta seguir os passos abaixo:</h3>
    <h5>• Clique no botão "<strong>CONTINUAR</strong>" abaixo;</h5>
    <h5>• Na página que abrir, passe o mouse em cima da etiqueta que contém "<strong>PÓS VENDA(v.1)</strong> e clique no botão "<strong>Iniciar</strong>" que irá aparecer. <strong>NÃO DEVE FAZER LOGIN!</strong></h5>
    <h5>• Preencha o formulário <strong> de acordo com a sua necessidade</strong>, envie uma mensagem e anexe algum arquivo <strong>caso seja necessário</strong>;</h5>
    <h5>• Clique em "<strong>Enviar Requisição</strong>" no final da página.</h5>
    
    <div class="container mt-5" align="center">
        <a href="https://dulub.orquestrabpm.com.br" class="btn btn-outline-danger mb-5" target="_blank">CONTINUAR</a>
    </div>
    
</div>

@component('components.rodape')@endcomponent
