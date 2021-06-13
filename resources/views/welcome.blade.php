@extends('layouts.plantilla')

@section('titulo', 'Menú Principal')

@section('contenido')
    <div class="text-secondary">
        <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase"><h4>Escuelita - Puerto Barrios, Izabal
                </h4>
            </div>
        </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/3.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/1.jpg') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>
@endsection
