@extends('layout.app')
@section('title','Profesor')
@section('content')
<div class="container">
    <h1>Apartado de notas</h1>
    <table class="table table-responsive-sm table-striped text-center" id="table_notas-docente">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Estudiantes</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Parcial</th>
                <th>Promedio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                
            <tr>
                <td>{{ $estudiante->id }}</td>
                <td>{{ $estudiante->nombre }}</td>
                <td>{{ $estudiante->nota1 }}</td>
                <td>{{ $estudiante->nota2 }}</td>
                <td>{{ $estudiante->nota3 }}</td>
                <td>{{ $estudiante->nota4 }}</td>
                <td>{{ $estudiante->parcial }}</td>
                <td>{{ $estudiante->promedio }}</td>
                <td>
                    <a href="{{ route('nota.edit',$estudiante->nota_id) }}" class="btn btn-outline-success">Modificar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection