@extends('layouts.app')

<div class="container-fluid" style="background-color:#1C1C1C">
    <section class="container">
        <div class="container">
            <div class="row" style="margin-bottom:-100px">
                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>DUNAX LUBRIFICANTES</strong></h5>
                    <p style="color:whitesmoke">Empresa genuinamente nordestina, com atuação integralizada e sempre crescente no mercado de óleos automotivos e industriais e graxas.</p>
                </div>
                
                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>CATÁLOGO DE PRODUTOS</strong></h5>
                    <a href="{{ route('otto') }}" style="color:whitesmoke">Linha Automotiva Ciclo OTTO</a><br>
                    <a href="{{ route('diesel') }}" style="color:whitesmoke">Linha Automotiva Ciclo Diesel</a><br>
                    <a href="{{ route('motos') }}" style="color:whitesmoke">Motocicletas</a><br>
                    <a href="{{ route('trans') }}" style="color:whitesmoke">Transmissão</a><br>
                </div>

                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>FALE CONOSCO</strong></h5>
                    <p style="color:whitesmoke">DUNAX LUBRIFICANTES LTDA<br>
                            Núcleo CIS, Lote 02, Quadra 03 – S/N – São Gonçalo dos Campos/BA<br>
                            CEP 44.330-000<br>
                            dulub@dulub.com.br<br>
                            (85) 3275.3070 | 0800 730 30 70</p>
                </div>
                <div class="container mb-3" align="center">
                    <a href="/Dev" style="color:whitesmoke; text-decoration:underline" target="_blank"><i><sub>Desenvolvido por Lucas Santana - Full Stack Developer</sub></i></a>
                </div>
            </div>
        </div>
    </section>
</div>