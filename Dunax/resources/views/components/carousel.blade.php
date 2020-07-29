<style>
    html,body {
        margin: 0;
        width: 100%;
        height: 100%;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }
      .content {
        width: 100vw;
        height: 100vh;
        display: flex;
        align-items: left;
        justify-content: center;
      }
      .slider-wrapper {
        color:#aaa;
        font-weight: bold;
        text-transform: uppercase;
        display: flex;
        align-items: center;
        justify-content: center;
      }
      .slider{
        height: 5vw;
        padding-left: 15px;
        align:left;
        overflow: hidden;
      }
      .slider div {
        color:#fff;
        height: 10px;
        margin-bottom: 50px;
        padding: 2px 15px;
        text-align: center;
        box-sizing: border-box;
      }
      .slider-text1 {
        font-size: 2.5vw;
        animation: slide-right 1s linear;
      }
      .slider-text2 {
        font-size: 1.5vw;
        animation: slide-right 1.2s linear;
      }
      .slider-text3 {
        animation: slide-right 1.5s linear;
      }
      @keyframes slide-right {
        0% {margin-right:-1500px;}
        100% {margin-right:0px;}
      }
</style>

<!--Inicio Slide-->
<div id="Inicio">
    <div class="container-narrow" style="margin-top:-2px">
        <div id="carouselSite" class="carousel slide mt-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
                <li data-target="#carouselSite" data-slide-to="1"></li>
                <li data-target="#carouselSite" data-slide-to="2"></li>
                <li data-target="#carouselSite" data-slide-to="3"></li>
                <li data-target="#carouselSite" data-slide-to="4"></li>
                <li data-target="#carouselSite" data-slide-to="5"></li>
            </ol>
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <img class="img-responsive d-block w-100" src="images/dulub_banner_site.png" alt="" style="width:100%; height:auto; filter:brightness(100%)">
                </div>

                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" src="images/slider_automotivo_otto.jpg" alt="" style="width:100%; height:auto; filter:brightness(100%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:2vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-8vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3">
                                    <a class="btn btn-danger btn-sm" href="{{ route('otto') }}">SAIBA MAIS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" src="images/imagem_contato.old.jpg" alt="" style="width:100%; height:auto; filter:brightness(80%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:2vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Novo Pós-venda!</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Ficou ainda mais fácil entrar em contato com a DULUB!</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-8vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger btn-sm" href="/Devolucao">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>    

                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" src="images/slider_motocicletas2.jpg" alt="" style="width:100%; height:auto; filter:brightness(100%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:2vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Motocicletas</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Até nas condições mais radicais</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-8vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger btn-sm" href="{{ route('motos') }}">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" src="images/slider_fluido-dot.old.jpg" alt="" style="width:100%; height:auto; filter:brightness(100%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:2vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Fluidos para freios</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Qualidade e segurança</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-8vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger btn-sm" href="#">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" srcset="images/slider_arla2.old.jpg" alt="" style="width:100%; height:auto; filter:brightness(100%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:2vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Arla 32</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-3vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Proteção e respeito</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">à Natureza</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-8vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger btn-sm" href="{{ route('arla') }}">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>

                <!--
                <div class="carousel-item">
                    <img class="img-responsive d-block w-100" src="images/slider_regenesis.jpg" alt="" style="margin-top:-35px; filter:brightness(100%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:10vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Preservar o Meio Ambiente</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:5vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Regenesis - Um compromisso de todos</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:1vw; left:10vw; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger btn-sm" href="/Regenesis">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>
                -->

                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev" style="width:100px">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next" style="width:100px">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--Fim Slide-->