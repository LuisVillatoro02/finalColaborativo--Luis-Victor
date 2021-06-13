<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>UMG-  @yield('titulo')</title>
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body id="body">
<div class="wrapper">
    <div class="sidebar">
        <h2><img src="{{asset('img/umg.png') }}" width="100" height="100"></h2>
        <ul>
            <li><a href="{{url('/')}}"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="{{url('estudiantes/lista')}}"><i class="fas fa-user"></i>Alumnos Inscritos</a></li>
            <li><a href="{{url('generos/lista')}}"><i class="fas fa-address-card"></i>Generos Destinados</a></li>
            <li><a href="{{url('/estudiantes/index')}}"><i class="fas fa-user"></i>Inscribir Alumno</a></li>
            <li><a href="{{url('generos/index')}}"><i class="fas fa-blog"></i>Insertar Genero</a></li>
            <li><a href="https://umg.edu.gt/nosotros"><i class="fas fa-address-book"></i>Sobre Nosotros </a></li>
            <li><a href="https://umg.edu.gt/"><i class="fas fa-map-pin"></i>Contactanos</a></li>
        </ul>
        <div class="social_media">
            <a href="https://www.facebook.com/UMGPuertoBarrios"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/umgoficial/"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="main_content">
        @yield('contenido')
    </div>
</div>
</body>
</html>
