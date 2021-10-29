@extends('layout.app')
@section('title','Profesor')
@section('content')
<div class="container">
    <h1>Apartado de cursos</h1>
    <table class="table table-responsive-sm table-striped table-hover text-center">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Cursos</th>
                <th>Ciclo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombreCurso }}</td>
                <td>{{ $curso->ciclo.'-'.$curso->year }}</td>
               <td>
                    <a href="{{ route('nota.index',$curso) }}" class="btn btn-success">Calificar</a>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection