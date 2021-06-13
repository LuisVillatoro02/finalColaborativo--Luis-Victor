@extends('layouts.plantilla')
@extends('layouts.plantilla2')
@section('titulo', 'Listado de Estudiante')
@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Estudiantes</h3>
        <div class="input-group mb-3">
            <a href="{{url('/estudiantes/index')}}" class="btn btn-success">Añadir un nuevo Estudiante</a>
        </div>
        <div class="table-responsive">
            <table class="table table-info table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Fecha de Nacimiento</th>
                    <th scope="col">edad</th>
                    <th scope="col">grado</th>
                    <th scope="col">seccion</th>
                    <th scope="col">ciclo escolar</th>
                    <th scope="col">Genero</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($estudiante as $estudiantes)
                    <tr>
                        <td>{{$estudiantes->id_estudiante}}</td>
                        <td>{{$estudiantes->nombre_estudiante}}</td>
                        <td>{{$estudiantes->apellido_estudiante}}</td>

                        <td>{{$estudiantes->fecha_nacimiento_estudiante}}</td>
                        <td>{{$estudiantes->edad_estudiante}}</td>
                        <td>{{$estudiantes->grado_estudiante}}</td>
                        <td>{{$estudiantes->seccion_estudiante}}</td>
                        <td>{{$estudiantes->ciclo_escolar_estudiante}}</td>
                        <td>{{$estudiantes->tipo_genero}}</td>
                        <td>
                            <a href="{{URL('/estudiantes/edit',$estudiantes->id_estudiante)}}" class="btn btn-warning">Editar</a>
                            <a href="{{url('/estudiantes/delete',$estudiantes->id_estudiante)}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $estudiante->links() }}
        </div>
    </div>
@endsection
