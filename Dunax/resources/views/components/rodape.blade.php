@extends('layouts.app')

<div class="container-fluid" style="background-color:#1C1C1C">
    <section class="container">
        <div class="container">
            <div class="row" style="margin-bottom:-100px">
                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>DUNAS DISTRIBUIDORA</strong></h5>
                    <p style="color:whitesmoke">Empresa genuinamente nordestina, com atuação integralizada e sempre crescente no mercado de óleos automotivos e industriais e graxas.</p>
                </div>
                
                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>CATÁLOGO DE PRODUTOS</strong></h5>
                    <a href="{{ route('otto') }}" style="color:whitesmoke">Veículos Leves</a><br>
                    <a href="{{ route('diesel') }}" style="color:whitesmoke">Veículos Pesados</a><br>
                    <a href="{{ route('motos') }}" style="color:whitesmoke">Motocicletas</a><br>
                    <a href="{{ route('trans') }}" style="color:whitesmoke">Transmissão</a><br>
                </div>

                <div class="col-sm" style="margin-top:20px; text-justify:auto">
                    <h5 style="color:whitesmoke"><strong>FALE CONOSCO</strong></h5>
                    <p style="color:whitesmoke">DULUB LUBRIFICANTES LTDA<br>
                            R. Jose de Abreu Pitta Pinheiro S/N – Gereraú Itaitinga/CE<br>
                            CEP 61.760-000<br>
                            dulub@dulub.com.br<br>
                            (85) 3275.3070 | 0800 730 30 70</p>
                </div>
            </div>
        </div>
    </section>
</div>