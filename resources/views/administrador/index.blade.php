@extends('layout.app')

@section('content')
<div class="container">
    <a class="btn btn-outline-success" href="{{ route('user.create') }}"></a>
    <table class="table table-responsive-sm">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre completo</th>
                <th>Telefono</th>
                <th>Email</th>
                <th>DUI</th>
                <th>Rol</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->nombre." ".$user->apellido }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->dui }}</td>
                <td>{{ $user->role->role }}</td>
            </tr>
            @empty
                
            @endforelse
        </tbody>
    </table>
</div>
@endsection