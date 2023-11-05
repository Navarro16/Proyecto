<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use Carbon\Carbon;
class AdministratorController extends Controller
{
    public function index(){
        return view('administrador.index');
    }
    /**Reportes de ventas */
    public function ventas(){
        return view('administrador.reporteVentas.index');
    }
    public function ventasdia(){

        $fechaActual = Carbon::now()->toDateString();
        $pedidos = Pedido::whereDate('created_at', $fechaActual)->get();

        return view('administrador.reporteVentas.reporteDia')->with('pedidos',$pedidos);

    }
    public function ventasmes(){

        $inicioMes = Carbon::now()->firstOfMonth();
        $finMes = Carbon::now()->endOfMonth();

        $pedidos = Pedido::whereBetween('created_at', [$inicioMes, $finMes])->get();

        return view('administrador.reporteVentas.reporteMes')->with('pedidos',$pedidos);
    }
    public function ventasano(){

        $fechaActual = Carbon::now();

        $pedidos = Pedido::whereYear('created_at', $fechaActual->year)->get();
        return view('administrador.reporteVentas.reporteAnual')->with('pedidos',$pedidos);
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
