<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plato.crearPlato');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $plato = new Plato();

        if ($request->hasFile('imagen')) { // pregunta si el archivo viene cargado desde el formulario de crear
            $file = $request->file('imagen'); // se obtiene el archivo y se guarda en la variable file
            $destinationPath = 'img/platos/'; //se crea una variable para guardar la ruta de la imagen
            $fileName = $file->getClientOriginalName(); // se crea variable para obtener el nombre, la funcion time sirve para que los nombres no se repitan
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $fileName); // se mueve la imagen hacia la carpeta de destino
            $plato->imagen = $destinationPath . $fileName; // se guarda el campo en la base de datos

        }

        $plato->nombrePlato = $request->nombrePlato;
        $plato->precio = $request->precio;

        $plato->save();
        return view("plato.mensaje", ['msg' => "Registro Guardado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plato $plato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $plato= Plato::find($id);
        return view('plato.modificarPlato',['plato'=>$plato]);
    }

    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $plato = Plato::find($id);
        $plato ->nombrePlato = $request-> input('nombrePlato');
        $plato ->precio = $request-> input('precio');
        $plato->save();
        return view("plato.mensaje", ['msg' => "Registro Modificado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $plato = Plato::find($id);
        $plato -> delete();
        return redirect()->route('cocinero.index');
    }
}
