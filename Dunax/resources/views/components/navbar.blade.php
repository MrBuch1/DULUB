@extends('layouts.app')
<!--Barra de navegação-->
<div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark" style="background-color: #e3f2fd;">
        <a class="navbar-brand ml-5" href="/">                
            <img class="img-responsive" src="{{asset('images/logo_dulub_100.png')}}" width="100px" class="img-responsive"
            alt="">                
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
            aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-5">
                <li class="nav-item">
                    <a class="nav-link" href="/" style="color:whitesmoke"><h5>Home</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Empresa" style="color:whitesmoke"><h5>Empresa</h5></a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('noticias') }}" style="color:whitesmoke"><h5>Notícias</h5></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Regenesis" style="color:whitesmoke"><h5>Regenesis</h5></a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
                        <h5>Produtos</h5>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navDropdown">
                        <a href="{{ route('otto') }}" class="dropdown-item">Automotivo Ciclo OTTO</a>
                        <a href="{{ route('diesel') }}" class="dropdown-item">Automotivo Ciclo Diesel</a>
                        <a href="{{ route('motos') }}" class="dropdown-item">Motocicletas</a>
                        <a href="{{ route('trans') }}" class="dropdown-item">Transmissão</a>
                    </div>                        
                </li>
                
                <li class="nav-item dropdown mr-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
                        <h5>Relacionamento</h5>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navDropdown">
                        <a href="/Devolucao" class="dropdown-item">Devolução de Compra</a>
                    </div>                        
                </li>

                <li class="nav-item">
                    <h1 style="color:whitesmoke">|</h1>
                </li>

                @guest
                    <li class="nav-item ml-3">
                        <a class="nav-link" href="{{ route('login') }}" style="color:whitesmoke"> 
                            <ion-icon class="mr-1" name="lock" style="color:whitesmoke"></ion-icon> 
                            {{ __('Área Restrita') }} </a>
                    </li>
                    <!--@if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}" style="color:whitesmoke">{{ __('Registrar') }}</a>
                        </li>
                    @endif-->
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('noticias.new') }}">Nova Notícia</a>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
</div>
<!--Fim Barra de navegação-->