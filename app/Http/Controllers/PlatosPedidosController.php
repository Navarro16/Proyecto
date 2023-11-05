<?php

namespace App\Http\Controllers;

use App\Models\PlatosPedidos;
use Illuminate\Http\Request;
use App\Models\Plato;

class PlatosPedidosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platos= Plato::all();
        return view('platosPedidos.hacerPedido')->with('platos',$platos);
    }

    public function hacerPedido()
    {
        //return view('platosPedidos.hacerPedido');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PlatosPedidos $platosPedidos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PlatosPedidos $platosPedidos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PlatosPedidos $platosPedidos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PlatosPedidos $platosPedidos)
    {
        //
    }
}
