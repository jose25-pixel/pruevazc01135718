@extends('layout.app')
@section('title','Estudiante')
@section('content')
<div class="container">
    <h1>Apartado de estudiante</h1>

    <a href="{{ route('estudiante.show') }}">Ver notas</a>
    <table class="table table-responsive-sm table-striped">
        <thead>
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
                   <form action="{{ route('estudiante.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="curso_id" value="{{ $curso->id }}">
                       <button type="submit" class="btn btn-info">Inscribirme</button>
                   </form>
                </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
@endsection