<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Reservación del local entero") }}
                    <br><br>
                    <div class="flex justify-center items-center place-content-center">
                        <button class="button-create w-64">
                            <a href="{{ url('/usuario/reservaLocal/create') }}">Crear reserva del local</a>
                        </button>
                    </div>
                    <br><br>
                    <div class="flex justify-center items-center place-content-center">
                        <table table class="table-cocinero border-collapse border-spacing-2 border border-500 ">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">Id</th>
                                    <th class="border border-slate-600">Cedula</th>
                                    <th class="border border-slate-600">Nombre</th>
                                    <th class="border border-slate-600">Fecha de reserva del local</th>
                                    <th class="border border-slate-600">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservaLocal as $reserva)
                                <tr>
                                    <td class="border border-slate-700">
                                        {{ $reserva->id  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $reserva->user->cedula  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $reserva->user->nombre." ".$reserva->user->apellidos  }}
                                    </td>
                                    <td class="border border-slate-700 ">
                                        {{ $reserva->fechaReservaLocal  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        <a href="{{ url('usuario/reservaLocal/'.$reserva -> id.'/edit') }}">
                                            <button type="button" class="button-update">Modificar</button>
                                        </a>
                                        <form action="{{url('usuario/reservaLocal/'. $reserva->id.'/destroy')}}" method="POST">
                                            @csrf    
                                            @method('DELETE')                                            
                                            <button type="submit" class="button-delete">Borrar</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="button-delete ">
                        <a href="{{ url('/usuario') }}">Regresar</a>
                    </button>
                    </br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
