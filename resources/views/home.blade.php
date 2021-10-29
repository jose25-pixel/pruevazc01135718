@extends('layout.app')
@section('title','Nota | Zabaleta')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 my-4">
            <h1 class="text-center mb-4">App de notas</h1>
            <h1 class="text-center mb-4">Bienvenido</h1>
             <h1 class="text-center mb-4">  {{ Auth::user()->nombre }}.{{ Auth::user()->apellido }}</h1>
            <img class="img-fluid" src="{{ asset('images/admin.png')}}" alt="">
        </div>
    </div>
</div>
@endsection
