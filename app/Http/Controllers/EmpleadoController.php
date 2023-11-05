<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use App\Models\rolEmpleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view('administrador.empleados.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = rolEmpleado::all();
        return view('administrador.empleados.create')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $empleado = new Empleado();
        $empleado->cedula = $request->cedula;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->email = $request->correo;
        $empleado->idRolEmpleado = $request->idRolEmpleado;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'img/empleados/';
            $fileName = $file->getClientOriginalName(); // se crea variable para obtener el nombre, la funcion time sirve para que los nombres no se repitan
            $uploadSuccess = $request->file('foto')->move($destinationPath, $fileName);
            $empleado->foto = $destinationPath . $fileName;
        }

        $empleado->save();

        // return redirect()->route('administrador.empleados.index')->with('success', 'El empleado se ha creado con éxito');
        return view('administrador.empleados.mensaje')->with('msg', 'El empleado se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        $roles = rolEmpleado::all();
        return view('administrador.empleados.edit')->with('empleado', $empleado)->with('roles', $roles);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::find($id);
        $empleado->cedula = $request->cedula;
        $empleado->nombre = $request->nombre;
        $empleado->apellidos = $request->apellidos;
        $empleado->email = $request->correo;
        $empleado->idRolEmpleado = $request->idRolEmpleado;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $destinationPath = 'img/empleados/';
            $fileName = $file->getClientOriginalName(); // se crea variable para obtener el nombre, la funcion time sirve para que los nombres no se repitan
            $uploadSuccess = $request->file('foto')->move($destinationPath, $fileName);
            $empleado->foto = $destinationPath . $fileName;
        }

        $empleado->save();

        // return redirect()->route('administrador.empleados.index')->with('success', 'El empleado se ha creado con éxito');
        return view('administrador.empleados.mensaje')->with('msg', 'El empleado se ha editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();
        return view('administrador.empleados.mensaje')->with('msg', 'El empleado se ha eliminado con éxito');

    }
}
