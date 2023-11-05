<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Administrador') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Gestión de personal") }}
                    <br><br>
                    <div class="flex justify-center items-center place-content-center">
                        <button class="button-create w-64">
                            <a href="{{ url('/administrador/empleados/create') }}">Crear empleado</a>
                        </button>
                    </div>
                    <br><br>
                    <div class="flex justify-center items-center place-content-center">
                        <table table class="table-cocinero border-collapse border-spacing-2 border border-500">
                            <thead>
                                <tr>
                                    <th class="border border-slate-600">Id</th>
                                    <th class="border border-slate-600">Imagen</th>
                                    <th class="border border-slate-600">Nombre</th>
                                    <th class="border border-slate-600">Apellidos</th>
                                    <th class="border border-slate-600">Correo</th>
                                    <th class="border border-slate-600">Rol</th>
                                    <th class="border border-slate-600">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                <tr>
                                    <td class="border border-slate-700">
                                        {{ $empleado->id  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        <img src="{{ URL::asset($empleado->foto) }}" alt="{{ $empleado->title }}"
                                        width="150px">
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $empleado->nombre  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $empleado->apellidos  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $empleado->email  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        {{ $empleado->rol->nombre  }}
                                    </td>
                                    <td class="border border-slate-700">
                                        <a href="{{ url('administrador/empleados/'.$empleado -> id.'/edit') }}">
                                            <button type="button" class="button-update">Modificar</button>
                                        </a>
                                        <form action="{{url('administrador/empleados/'. $empleado->id.'/destroy')}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="button-delete">Borrar</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button class="button-delete">
                        <a href="{{ url('/administrador/ventas') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
