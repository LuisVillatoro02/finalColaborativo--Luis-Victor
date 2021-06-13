@extends('layouts.plantilla')
@section('titulo', 'Registro de Estudiante')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

@section('contenido')
    <div class="p-1">
        <div class="text-secondary">
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center text-blue text-uppercase">
                    <h4>
                        Registro de Estudiante
                    </h4>
                </div>
            </div>
        </div>
        <div class="p-5">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
            @endif

            @if(\Session::has('warning'))
                <div class="alert alert-warning">
                    <ul>
                        <li>{!! \Session::get('warning') !!}</li>
                    </ul>
                </div>
            @endif

            <form action="{{route('estudiante.registrarEstudiante')}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Nombre:</label>
                            <input type="text" name="nombre_estudiante"  maxlength="75" class="form-control">
                            <input type="hidden" name="control" value="form">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Apellido:</label>
                            <input type="text" name="apellido_estudiante"  maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                    <label for="fecha_nacimiento_estudiante">Fecha Nacimiento</label>
                    <input type="date" name="fecha_nacimiento_estudiante" id="fecha_nacimiento_estudiante" value="" class="form-control  mx-auto" placeholder="fecha_nacimiento">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="edad_alumno">Edad</label>
                            <input type="text" name="edad_estudiante" id="edad_estudiante" value="" readonly class="form-control  mx-auto" placeholder="edad">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Grado:</label>
                            <input type="text" name="grado_estudiante"  maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Seccion:</label>
                            <input type="text" name="seccion_estudiante"  maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Ciclo Escolar:</label>
                            <input type="text" name="ciclo_escolar_estudiante"  maxlength="75" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label>Genero</label>
                            <select name="id_genero" class="form-control" >
                                <option value="">--Seleccione--</option>
                                @foreach($genero as $generos)
                                    <option value="{{$generos->id_genero}}"> {{$generos->tipo_genero}}  </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <center><div class="row">
                        <div class="col-6 offset-3">
                            <button type="submit" class="btn btn-success">Guardar </button>
                            <button class="btn btn-warning" type="reset">Limpiar Casillas</button>
                            <a href="{{url('/estudiantes/lista')}}" class="btn btn-info">Listado de Estudiantes</a>

                        </div>
                    </div>
                </center>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function(){
            $('#fecha_nacimiento_estudiante').on('change', calcularEdad);
        });

        function calcularEdad() {

            fecha = $(this).val();
            var hoy = new Date();
            var cumpleanos = new Date(fecha);
            var edad = hoy.getFullYear() - cumpleanos.getFullYear();
            var m = hoy.getMonth() - cumpleanos.getMonth();

            if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
                edad--;
            }
            $('#edad_estudiante').val(edad);
        }
    </script>


@endsection
