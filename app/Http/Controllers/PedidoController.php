<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;
use App\Models\Plato;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platos= Plato::all();
        return view('usuario.hacerPedido')->with('platos',$platos);
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
    public function store($idPlato)
    {
        $pedido = new Pedido();
        $pedido->cedulaUsuario = Auth::user()->cedula;
        $pedido->idMesa = 1;
        $pedido->idPlato = $idPlato;
        $pedido->save();

        // echo $idPlato . "El id del usuario es: " . Auth::user()->cedula;

        return redirect()->route('usuario.gestionarPedidos');
    }

    public function gestionarPedidos()
    {
        $pedidosDelUsuario = Pedido::where('cedulaUsuario', Auth::user()->cedula)->get();
        return view('usuario.gestionarPedidos')->with('pedidosDelUsuario', $pedidosDelUsuario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $pedido = Pedido::find($id);
        return view('usuario.editarPedido')->with('pedido', $pedido);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pedido = Pedido::find($id);
        $pedido -> delete();
        return redirect()->route('usuario.gestionarPedidos');
    }
}
