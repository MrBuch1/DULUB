@extends('layouts.app')
@section('content')

@component('components.navbar')@endcomponent

<style>
    .animated {
       background-repeat: no-repeat;
       background-position: left top;
       margin-bottom:60px;
       -webkit-animation-duration: 5s;
       animation-duration: 5s;
       -webkit-animation-fill-mode: both;
       animation-fill-mode: both;
    }
    
    @-webkit-keyframes fadeIn {
       0% {opacity: 0;}
       100% {opacity: 1;}
    }
    
    @keyframes fadeIn {
       0% {opacity: 0;}
       100% {opacity: 1;}
    }
    
    @-webkit-keyframes fadeOut {
       100% {opacity: 1;}
       0% {opacity: 0;}
    }
    
    @keyframes fadeOut {
       100% {opacity: 1;}
       0% {opacity: 0;}
    }
    
    .fadeIn {
       -webkit-animation-name: fadeIn;
       animation-name: fadeIn;
    }
    
    .fadeOut {
       -webkit-animation-name: fadeOut;
       animation-name: fadeOut;
    }
 </style>

<div class="container-narrow">
    <img class="img-responsive img-fluid shadow-lg" src="images\imagem_oleo_new.jpg" alt="" style="margin-top:-550px; width:100%">

    <!-- <div class="container" style="position:absolute; top:250px; left:150px;"><h1 style="color:whitesmoke; font-weight:bold;">A EMPRESA</h1></div> -->
</div>

<div class="container mt-5">
    <h2 style="text-decoration:underline"><strong>DUNAX LUBRIFICANTES</strong></h2>
    <p>Fundada em 2004 com o propósito de desenvolver lubrificantes de última geração para anteder as necessidades e 
        exigências dos seguimentos automotivos, industriais, agrícolas e de todos os demais que requisitem 
        do lubrificante preço acessível, qualidade superior e tecnologia avançada.
        <br><br>
        Responsabilidade social e ambiental são valores fundamentais que se somam a sustentabilidade, simplicidade e 
        inovação presentes nas ações diárias da empresa. Essas práticas, permitem posicionar a Dunax lubrificantes como 
        empresa vanguardista no desenvolvimento social, valorização ao indivíduo e respeito a natureza.
    </p>

    <p><strong>Missão:</strong>
        <br><br>
        Disponibilizar produtos de qualidade, sustentáveis e em sintonia com as exigências das demandas modernas, 
        valorizando o desenvolvimento tecnológico e capacitação técnica do nosso time.
    </p>

    <p><strong>Visão:</strong>
        <br><br>
        Posicionar as Marcas DULUB, DUNAX e RENOX como referência de excelência nos seus devidos segmentos, 
        promovendo o trabalho, o respeito e confiança dos nossos fornecedores, colaboradores e clientes.
    </p>

    <div class="container mt-5 animated fadeIn fadeOut">
        <hr>
        <img class="img-responsive center d-block" src="images\logos-empresa.png" alt="" style="margin-left:auto; margin-right:auto">
        <hr>
    </div>

    <div class="container mt-5">
        <h2 style="text-decoration:underline"><strong>UNIDADE 01 - FEIRA DE SANTANA/BA</strong></h2>
        <h4>DUNAX LUBRIFICANTES LTDA<br>
            CNPJ: 05.092.901/0009-21<br>
            Núcleo CIS, Lote 02, Quadra 03 – S/N<br>
            São Gonçalo dos Campos/BA – CEP 44.330-000</h4>
    </div>
</div>

<div class="container-fluid mt-5 mb-5">
    <section class="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto1.jpg" alt="">
                </div>

                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto2.jpg" alt="">
                </div>

                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto3.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto4.jpg" alt="">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto5.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto6.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto7.jpg" alt="">
                </div>
        
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto8.jpg" alt="">
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto9.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto10.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto11.jpg" alt="">
                </div>
        
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade1_foto12.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
</div>

<!-- <div class="container mt-5">
    <h2 style="text-decoration:underline; margin-top:150px"><strong>UNIDADE 02 – ITAITINGA/CE</strong></h2>
    <h4>DULUB LUBRIFICANTES LTDA<br>
        CNPJ: 04.382.181/0001-19<br>
        Rua jose de Abreu Pitta Pinheiro S/N – Gereraú<br>
        Itaitinga/CE – CEP 61.760-000</h4>
</div>

<div class="container-fluid mt-5 mb-5">
    <section class="container">
        <div class="container">
            <div class="row mb-5">
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto1.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto2.jpg" alt="">
                </div>
    
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto3.jpg" alt="">
                </div>
        
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto4.jpg" alt="">
                </div>
            </div>
    
            <div class="row mb-5">
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto5.jpg" alt="">
                </div>
        
                <div class="col-sm">
                    <img class="img-responsive d-block" src="images\Empresas\unidade2_foto6.jpg" alt="">
                </div>

                <div class="col-sm"></div>

                <div class="col-sm"></div>
            </div>
        </div>
    </section>
</div> -->

@component('components.rodape')@endcomponent
    
@endsection