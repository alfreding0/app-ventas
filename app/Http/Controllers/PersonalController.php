<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index()
    {
        $personales = Personal::all();
        return view('personal.index', compact('personales'));
    }

    public function create()
    {
        return view('personal.create');
    }

    public function store(Request $request)
    {
        $personal = new Personal();
        $personal->nombres = $request->input('nombres');
        $personal->apellidos = $request->input('apellidos');
        $personal->telefono = $request->input('telefono');
        $personal->genero = $request->input('genero');
        $personal->direccion = $request->input('direccion');
        $personal->save();

        return redirect()->route('personal.index');
    }

    public function edit($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.edit', compact('personal'));
    }

    public function update(Request $request, $id)
    {
        $personal = Personal::findOrFail($id);
        $personal->nombres = $request->input('nombres');
        $personal->apellidos = $request->input('apellidos');
        $personal->telefono = $request->input('telefono');
        $personal->genero = $request->input('genero');
        $personal->direccion = $request->input('direccion');
        $personal->save();

        return redirect()->route('personal.index');
    }

    public function show($id)
    {
        $personal = Personal::findOrFail($id);
        return view('personal.show', compact('personal'));
    }

    public function destroy($id)
    {
        $personal = Personal::findOrFail($id);
        $personal->delete();

        return redirect()->route('personal.index');
    }
}
