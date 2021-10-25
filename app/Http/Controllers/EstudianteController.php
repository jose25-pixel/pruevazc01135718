<?php

namespace App\Http\Controllers;

use App\Curso;
use App\Matricula;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();
        return view('estudiante.index', compact('cursos'));
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
    public function store()
    {
        $nota = Nota::create([
            "nota1" => 0.0,
            "nota2" => 0.0,
            "nota3" => 0.0,
            "nota4" => 0.0,
            "parcial" => 0.0,
            "promedio" => 0.0
        ]);
        Matricula::create([
            "user_id" => Auth::user()->id,
            "curso_id" => request()->curso_id,
            "nota_id" => $nota->id
        ]);
        return redirect()->route('estudiante.index')->with('success','Te has inscrito al curso!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function notas()
    {
        $notas = DB::table('matriculas')
                        ->join('users','matriculas.user_id','=','users.id')
                        ->join('cursos','matriculas.curso_id','=','cursos.id')
                        ->join('notas','matriculas.nota_id','=','notas.id')
                        ->where('matriculas.user_id',Auth::user()->id)
                        ->get();
        return view('estudiante.notas',compact('notas'));
    }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
