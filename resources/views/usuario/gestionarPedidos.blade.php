<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FOM Usuario') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 title-card">
                {{ __("Iniciaste sesión como Usuario!") }}
                <br>
            </div>
            <spam class="title-card">Gestionar Pedido</spam>
            <br>
            <spam> A continuación puedes gestionar tus pedidos:</spam>
        </div>
        <div class="container">
            <div class="py-12">
                <table table class="table-cocinero border-collapse border-spacing-2 border border-500">
                    <thead>
                        <tr>
                            <th class="border border-slate-600">Id</th>
                            <th class="border border-slate-600">Imagen</th>
                            <th class="border border-slate-600">Nombre</th>
                            <th class="border border-slate-600">Precio</th>
                            <th class="border border-slate-600">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pedidosDelUsuario as $pedido)
                        <tr>
                            <td class="border border-slate-700">
                                {{ $pedido->id }}
                            </td>

                            <td class="border border-slate-700">
                                <img src="{{ URL::asset($pedido->plato->imagen) }}" alt="{{ $pedido->plato->title }}" width="150px">
                            </td>
                            <td class="border border-slate-700 w-50">
                                {{ $pedido->plato->nombrePlato }}
                            </td>
                            <td class="border border-slate-700">
                                {{ $pedido->plato->precio }}
                            </td>
                            <td class="border border-slate-700">
                                <!-- <a href="{{ url('/usuario/editarPedido/' . $pedido->id) }}">
                                    <button type="button" class="button-update">editar</button>
                                </a> -->
                                <form action="{{url('pedido/'. $pedido->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="button-delete">Borrar</button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
                <button class="button-delete ">
                    <a href="{{ url('usuario') }}">Cancelar</a>
                </button>
            </div>
        </div>
    </div>


</x-app-layout>