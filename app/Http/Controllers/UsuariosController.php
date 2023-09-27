<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Usuarios::all();
        return view('usuarios/indexUsuarios', compact('users'));
        //return view('usuariosusuarios/indexUsuarios'->with(['users' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios/formUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios = new Usuarios();
        $usuarios->apodo = $request->apodo;
        $usuarios->nombre = $request->nombre;
        $usuarios->apellidos = $request->apellidos;
        $usuarios->edad = $request->edad;
        $usuarios->genero = $request->genero;
        $usuarios->email = $request->email;
        $usuarios->save();

        return redirect('/usuarios');

    }

    /**
     * Display the specified resource.
     */
    public function show(usuarios $usuario)
    {
        return view('usuarios.showUsuarios', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuarios $usuario)
    {
        return view('usuarios.editUsuario', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, usuarios $usuario)
    {
        $usuario->apodo = $request->apodo;
        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->edad = $request->edad;
        $usuario->genero = $request->genero;
        $usuario->email = $request->email;
        $usuario->save();
        return redirect()->route('usuarios.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuarios $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
