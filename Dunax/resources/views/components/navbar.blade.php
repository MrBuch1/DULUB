@extends('layouts.app')

<style>
    
    :root {
    --mainColor: #EE0000;
    }
    
    .hover-color {
        background:
            linear-gradient(
              to bottom, var(--mainColor) 0%,
              var(--mainColor) 100%
            );
        background-position: 0 100%;
        background-repeat: repeat-x;
        background-size: 0px 0px;
        color: red;
        text-decoration: none;
        transition: background-size .2s;
    }

    .hover-color-options {
        background:
            linear-gradient(
              to bottom, var(--mainColor) 0%,
              var(--mainColor) 100%
            );
        background-position: 0 100%;
        background-repeat: repeat-x;
        background-size: 0px 0px;
        color: red;
        text-decoration: none;
        transition: background-size .2s;
    }
    
    .hover-color:hover {
      background-size: 4px 50px;
    }

    .hover-color-options:hover {
      background-size: 4px 50px;
      -webkit-text-fill-color: white;
    }

</style>


<!--Barra de navegação-->
<div class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark" style="background-color: #e3f2fd; filter:opacity(85%)">
        <a class="navbar-brand ml-5" href="/">                
            <img class="img-responsive" src="{{asset('images/logo_dulub_100.png')}}" width="75px" class="img-responsive"
            alt="">                
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#barra-navegacao"
            aria-controls="barra-navegacao" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="barra-navegacao">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0 mr-5">
                <li class="nav-item mx-1">
                    <a class="nav-link hover-color" href="/" style="color:whitesmoke">Home</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link hover-color" href="/Empresa" style="color:whitesmoke">Empresa</a>
                </li>
                
                <li class="nav-item mx-1">
                    <a class="nav-link hover-color" href="{{ route('noticias') }}" style="color:whitesmoke">Notícias</a>
                </li>
                <li class="nav-item mx-1">
                    <a class="nav-link hover-color" href="/Renox" style="color:whitesmoke">Renox</a>
                </li>

                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle hover-color" href="#" id="navDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
                        Produtos
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navDropdown">
                        <a href="{{ route('otto') }}" class="dropdown-item hover-color" style="color:white">Automotivo Ciclo OTTO</a>
                        <a href="{{ route('diesel') }}" class="dropdown-item hover-color" style="color:whitesmoke">Automotivo Ciclo Diesel</a>
                        <a href="{{ route('motos') }}" class="dropdown-item hover-color" style="color:whitesmoke">Motocicletas</a>
                        <a href="{{ route('trans') }}" class="dropdown-item hover-color" style="color:whitesmoke">Transmissão</a>
                        <a href="{{ route('eng') }}" class="dropdown-item hover-color" style="color:whitesmoke">Engrenagens</a>
                        <a href="{{ route('ind') }}" class="dropdown-item hover-color" style="color:whitesmoke">Industrial</a>
                        <a href="{{ route('graxas') }}" class="dropdown-item hover-color" style="color:whitesmoke">Graxas</a>
                        <a href="{{ route('arla') }}" class="dropdown-item hover-color" style="color:whitesmoke">Arla 32</a>
                        <a href="{{ route('equip') }}" class="dropdown-item hover-color" style="color:whitesmoke">Equipamentos</a>
                    </div>                        
                </li>
                
                <li class="nav-item dropdown mx-1">
                    <a class="nav-link dropdown-toggle hover-color" href="#" id="navDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
                        Relacionamento
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navDropdown">
                        <a href="/Devolucao" class="dropdown-item hover-color" style="color:white">Pós-venda</a>
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    @if (Auth::id() == 1)
                        <li class="nav-item">
                            <a href="{{ route('noticias.new') }}">Nova Notícia</a>
                        </li>
                    @endif
                @endguest
            </ul>
        </div>
    </nav>
</div>
<!--Fim Barra de navegação-->