@extends('layout.app')
@section('title', 'cursos')

@section('content')
<div class="container">
    <h1 class="text-center text-dark py-3">Cursos</h1>
         <a class="btn btn-outline-success mb-3" href="{{ route('curso.create') }}">Agregar +</a>
    <div class="row">

        <div class="col-12 col-md-12">
            <table class="table table-responsive-sm table-hover" id="table_curso">
                <thead align="center" class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Cursos</th>
                        <th>Ciclo - Año</th>
                        <th>Profesor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cursos as $curso)
                        
                    <tr>
                        <td>{{ $curso->id }}</td>
                        <td>{{ $curso->nombreCurso }}</td>
                        <td>{{ $curso->ciclo." - ".$curso->year }}</td>
                        <th>{{ $curso->user->nombre." ".$curso->user->apellido }}</th>
                        <td>
                            <div class="row">
                                <div class="col-md-6">
                                    <a href="{{ route('curso.edit',$curso) }}" class="btn btn-outline-info btn-sm"><i class="far fa-edit"></i></a>
                                    
                                </div>
                                <div class="col-md-6">

                                    <form action="{{ route('curso.destroy',$curso) }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection