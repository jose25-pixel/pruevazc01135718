<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
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
        $users = User::all();
        return view('administrador.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('administrador.create', compact('user'));
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
            "nombre" => "required",
            "apellido" => "required",
            "fechaNacimiento" => "required",
            "direccion" => "required",
            "dui" => "required",
            "genero" => "required",
            "telefono" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required",
        ]);
        $user = request()->all();
        $user['password'] = bcrypt(request()->password);
        $user = User::create($user);
        return redirect()->route('user.index')->with('success',' Usuario agregado con exito!!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(User $user)
    {
        return view('administrador.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(User $user)
    {
        request()->validate([
            "nombre" => "required",
            "apellido" => "required",
            "fechaNacimiento" => "required",
            "direccion" => "required",
            "dui" => "required",
            "genero" => "required",
            "telefono" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required",
        ]);
        $user->update(request()->all());
        return redirect()->route('user.index')->with('success',' Usuario fue modificado!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success',' Usuario eliminado!');
    }
}
