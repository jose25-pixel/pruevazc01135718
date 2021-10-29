<?php

namespace App\Http\Controllers;

use App\Matricula;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($curso = null)
    {
        $estudiantes = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('cursos.id',$curso)
                        ->get();
        return view('profesor.nota',compact('estudiantes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function show(Nota $nota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function edit($nota)
    {
        $estudiantes = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('matriculas.nota_id',$nota)
                        ->get();
        return view('profesor.edit',compact('estudiantes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function update(Nota $nota,$curso_id)
    {
        $data = request()->all();

     //promedio

        $promedio = (request()->nota1 + request()->nota2 + request()->nota3 + request()->nota4 + request()->parcial) / 5;

        $data['promedio'] = $promedio;
        $nota->update($data);


        return redirect()->route('nota.index',$curso_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nota  $nota
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nota $nota)
    {
        //
    }
}
