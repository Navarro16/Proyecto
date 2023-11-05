<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ventas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Reporte de ventas Mensual") }}
                    <br><br>
                    <center>
                    <div class="container">
                        <div class="py-12">
                            <table table class="table-cocinero border-collapse border-spacing-2 border border-500">
                                <thead>
                                    <tr>
                                        <th class="border border-slate-600">Id</th>
                                        <th class="border border-slate-600">Nombre</th>
                                        <th class="border border-slate-600">Mesa</th>
                                        <th class="border border-slate-600">Plato</th>
                                        <th class="border border-slate-600">Precio</th>
                                        <th class="border border-slate-600">Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($pedidos as $pedido)
                                    <tr>
                                    <td class="border border-slate-700">
                                            {{ $pedido->id }}
                                        </td>
                                        <td class="border border-slate-700 w-50">
                                            {{ $pedido->user->nombre. " ". $pedido->user->apellidos }}
                                        </td>
                                        <td class="border border-slate-700 w-50">
                                            {{ $pedido->mesa->nombreMesa }}
                                        </td>
                                        <td class="border border-slate-700 w-50">
                                            {{ $pedido->plato->nombrePlato }}
                                        </td>
                                        <td class="border border-slate-700 w-50">
                                            {{ $pedido->plato->precio }}
                                        </td>
                                        <td class="border border-slate-700 w-50">
                                            {{ $pedido->updated_at }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </center>
                    <button class="button-delete">
                        <a href="{{ url('/administrador/ventas') }}">Regresar</a>
                    </button>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
