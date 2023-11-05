<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Cocinero') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Iniciaste sesión como Cocinero!") }}
                    <br></br>
                    <center><button class="button-create ">
                            <a href="{{ url('plato/create') }}">Crear Plato</a>
                        </button></center>
                    <br></br>
                    <center>
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
                                @foreach ($platos as $plato)
                                <tr>
                                    <td class="border border-slate-700">
                                        {{ $plato -> id }}
                                    </td>
                                    <td class="border border-slate-700">
                                        <img src="{{ URL::asset($plato -> imagen)}}" alt="{{ $plato -> title }}" width="150px">
                                    </td>
                                    <td class="border border-slate-700 w-50">
                                        {{ $plato -> nombrePlato }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $plato -> precio }}
                                    </td>
                                    <td class="border border-slate-700">
                                        <a href="{{ url('plato/'.$plato -> id.'/edit') }}">
                                            <button type="button" class="button-update">Modificar</button>
                                        </a>
                                        <form action="{{url('plato/'. $plato->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="button-delete">Borrar</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </center>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
