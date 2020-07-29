@extends('layouts.app')
@section('content')

<div class="container mt-5" align="center">
    <h1 class="display-1"><strong>Desenvolvido por:</strong></h1>

    <div class="card mb-3 mt-5" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="images/Dev/ls.jpg" class="card-img shadow" alt="">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Lucas Santana</h5>
                    <p class="card-text">Desenvolvedor Full-Stack</p>
                    <div class="container">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                        </div>
                        <p class="card-text"><small class="text-muted">HTML 5</small></p>
                    </div>

                    <div class="container">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                        </div>
                        <p class="card-text"><small class="text-muted">CSS</small></p>
                    </div>

                    <div class="container">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                        </div>
                        <p class="card-text"><small class="text-muted">PHP</small></p>
                    </div>

                    <div class="container mb-n5">
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
                        </div>
                        <p class="card-text"><small class="text-muted">PYTHON</small></p>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <section class="container">
                    <div class="row">
                        <div class="col-sm">
                            <a href="https://www.facebook.com/lucas.santana.1010" target="_blank">
                                <img src="Social_Media_Icons/Icons/svg/facebook.svg" alt="" style="width:35%">
                            </a>
                        </div>
                        <div class="col-sm">
                            <a href="https://api.whatsapp.com/send?phone=5575983014336" target="_blank">
                                <img src="Social_Media_Icons/Icons/svg/whatsapp.svg" alt="" style="width:35%">
                            </a>
                        </div>
                        <div class="col-sm">
                            <a href="https://www.instagram.com/lucassants97/" target="_blank">
                                <img src="Social_Media_Icons/Icons/svg/instagram.svg" alt="" style="width:35%">
                            </a>
                        </div>
                        <div class="col-sm">
                            <a href="https://open.spotify.com/user/12166710402?si=6MttRo6uS2ulDZTCGysE-g" target="_blank">
                                <img src="Social_Media_Icons/Icons/svg/spotify.svg" alt="" style="width:35%">
                            </a>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-top:325px">Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div>

@endsection