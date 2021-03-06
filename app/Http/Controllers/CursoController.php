<?php

namespace App\Http\Controllers;

use App\Curso;
use App\User;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function __construct()
    {
        $this->middleware('roles:1');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('role_id',2)->get();
        $cursos = Curso::all();
        return view('curso.index', compact('users','cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
  $users = User::where('role_id',2)->get();


        $curso = new Curso();

       // $suppliers = Supplier::all(); Todos los proveedores

        return view('curso.create',compact('users','curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "nombreCurso" => "required",
            "year" => "required",
            "ciclo" => "required",
            "user_id" => "required"
        ]);
        Curso::create(request()->all());
        return redirect()->route('curso.index')->with('success',' Curso agregado exitosamente!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        $users = User::where('role_id',2)->get();
        return view('curso.edit', compact('curso','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Curso $curso)
    {
        request()->validate([
            "nombreCurso" => "required",
            "year" => "required",
            "ciclo" => "required",
            "user_id" => "required"
        ]);
        $curso->update(request()->all());

        return redirect()->route('curso.index')->with('success',' Curso actualizado!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('curso.index')->with('success',' Curso eliminado!!');
    }
}
