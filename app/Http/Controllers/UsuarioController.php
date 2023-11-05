<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Plato;
use App\Models\User;
use App\Models\ReservaLocal;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('usuario.index');
    }



    public function verMenu()
    {
        return view('usuario.verMenu');
    }

    public function ReservaLocal()
    {
        $reservaLocal = ReservaLocal::where("cedula", "=", Auth::user()->cedula)->get();
        return view('usuario.ReservaLocal.index')->with('reservaLocal',$reservaLocal);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = User::all();
        return view('usuario.ReservaLocal.create')->with('clientes', $clientes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $reservaLocal = new ReservaLocal();
        $reservaLocal->cedula = $request->cedula;
        $reservaLocal->fechaReservaLocal = $request->fechaReservaLocal;

        $reservaLocal->save();

        return view('usuario.ReservaLocal.mensaje')->with('msg', 'La reserva del local se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $reservaLocal = ReservaLocal::find($id);
        $clientes = User::all();
        return view('usuario.ReservaLocal.edit')->with('reservaLocal', $reservaLocal)->with('clientes', $clientes);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $reservaLocal = ReservaLocal::find($id);
        $reservaLocal->cedula = $request->cedula;
        $reservaLocal->fechaReservaLocal = $request->fechaReservaLocal;

        $reservaLocal->save();

        return view('usuario.ReservaLocal.mensaje')->with('msg', 'La reserva del local se ha editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservaLocal = ReservaLocal::find($id);
        $reservaLocal-> delete();
        return view('usuario.ReservaLocal.mensaje')->with('msg', 'La reserva del local se ha eliminado con éxito');
    }
}
