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
        align-items: center;
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
        height: 50px;
        padding-left:15px;
        overflow: hidden;
      }
      .slider div {
        color:#fff;
        height: 50px;
        margin-bottom: 50px;
        padding: 2px 15px;
        text-align: center;
        box-sizing: border-box;
      }
      .slider-text1 {
        font-size: 40px;
        animation: slide-right 1s linear;
      }
      .slider-text2 {
        font-size: 20px;
        animation: slide-right 1.2s linear;
      }
      .slider-text3 {
        font-size: 20px;
        animation: slide-right 1.5s linear;
      }
      @keyframes slide-right {
        0% {margin-right:-1500px;}
        100% {margin-right:0px;}
      }
</style>
<!--Inicio Slide-->
<div id="Inicio">
    <div class="container-narrow">
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
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
                    <img class="img-responsive d-block w-100" src="images/slider_automotivo_2.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
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
                    <img class="img-responsive d-block w-100" src="images/imagem_contato.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
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
                    <img class="img-responsive d-block w-100" src="images/slider_motocicletas2.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
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
                    <img class="img-responsive d-block w-100" src="images/slider_fluido-dot.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
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
                    <img class="img-responsive d-block w-100" src="images/slider_arla2.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
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
                    <img class="img-responsive d-block w-100" src="images/slider_regenesis.jpg" alt="" style="height:80%; filter:brightness(50%)">
                    <div class="container">
                        <div class="slider-wrapper left" style="position:absolute; bottom:150px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text1">Linha Automotiva</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text2">Mais proteção e performance</div>
                            </div>
                        </div>

                        <div class="slider-wrapper left" style="position:absolute; bottom:-20px; left:150px; color:whitesmoke; font-weight:bold; font-family:Arial, Helvetica, sans-serif">
                            <div class="slider" style="margin-bottom:100px">
                                <div class="slider-text3"><a class="btn btn-danger" href="{{ route('otto') }}">SAIBA MAIS</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="col-8 text-justify">
                            <h1 style="margin-top: -200px;"></h1>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Voltar</span>
                </a>
                <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Avançar</span>
                </a>
            </div>
        </div>
        <div id="Produtos"></div>
        </div>
    </div>
</div>
<!--Fim Slide-->