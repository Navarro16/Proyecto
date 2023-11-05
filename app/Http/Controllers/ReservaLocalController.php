<?php

namespace App\Http\Controllers;

use App\Models\ReservaLocal;
use App\Models\User;
use Illuminate\Http\Request;

class ReservaLocalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservaLocal = ReservaLocal::all();
        return view('administrador.reservaLocal.index')->with('reservaLocal',$reservaLocal);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = User::all();
        return view('administrador.reservaLocal.create')->with('clientes', $clientes);
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

        return view('administrador.reservaLocal.mensaje')->with('msg', 'La reserva del local se ha creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(ReservaLocal $reservaLocal)
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
        return view('administrador.reservaLocal.edit')->with('reservaLocal', $reservaLocal)->with('clientes', $clientes);
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

        return view('administrador.reservaLocal.mensaje')->with('msg', 'La reserva del local se ha editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $reservaLocal = ReservaLocal::find($id);
        $reservaLocal-> delete();
        return view('administrador.reservaLocal.mensaje')->with('msg', 'La reserva del local se ha eliminado con éxito');
    }
}
