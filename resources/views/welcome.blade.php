@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('images/colegio0.jpg') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/colegio1.jpg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('images/colegio2.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div><br/>
    <div class="container">
        <div class="card">
            <div class="card-header">Colegio destacado:</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm">
                        <img src="{{ asset('images/colegio3.jpg') }}" alt="" style="width: 100%; height: 75%;border-radius: 5px;">
                    </div>
                    <div class="col-sm text-center">
                        <h5><strong>Nombre:</strong></h5>
                        <span>Saco Oliveros</span><br/><br/>
                        <h5><strong>Descripción:</strong></h5>
                        <p>Es un colegio que utiliza el sistema helicoidal. Además, cuenta con un equipo de profesionales altamente calificado para formar la excelencia académica de los alumnos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection