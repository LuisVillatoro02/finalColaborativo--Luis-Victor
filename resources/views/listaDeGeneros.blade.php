@extends('layouts.plantilla')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Generos</h3>
        <div class="input-group mb-3">
            <a href="{{url('/generos/index')}}" class="btn btn-success">Añadir un nuevo Genero</a>
        </div>
        <div class="table-responsive">
            <table class="table table-warning table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TIPO</th>
                    <th scope="col" >Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($genero as $generos)
                    <tr>
                        <td>{{$generos->id_genero}}</td>
                        <td>{{$generos->tipo_genero}}</td>

                        <td>
                            <a href="{{URL('/generos/edit',$generos->id_genero)}}" class="btn btn-warning">Editar</a>
                            <a href="{{url('/generos/delete',$generos->id_genero)}}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $genero->links() }}
        </div>
    </div>
@endsection
