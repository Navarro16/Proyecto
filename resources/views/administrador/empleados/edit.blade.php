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
                    <br>
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Editar Empleado</h1>
                    <div class="mt-6">
                        <form action="{{ url('/administrador/empleados/'. $empleado->id .'/update') }}" class="space-y-1" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
                                <div>
                                    <label for="cedula" class="block text-sm font-medium teext-gray-700 form-lavel">Cédula </label>
                                    <input type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="cedula" id="cedula" placeholder="Agregar la cédula del empleado" value="{{ $empleado->cedula }}">
                                </div>
                                <br>
                                <div>
                                    <label for="nombre" class="block text-sm font-medium teext-gray-700 form-lavel">Nombre </label>
                                    <input type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="nombre" id="nombre" placeholder="Agregar nombre del empleado" value="{{ $empleado->nombre }}">
                                </div>
                                <br>
                                <div>
                                    <label for="apellidos" class="block text-sm font-medium teext-gray-700 form-lavel">Apellidos </label>
                                    <input type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="apellidos" id="apellidos" placeholder="Agregar apellidos del empleado" value="{{ $empleado->apellidos }}">
                                </div>
                                <br>
                                <div>
                                    <label for="correo" class="block text-sm font-medium teext-gray-700 form-lavel">Correo </label>
                                    <input type="email" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="correo" id="correo" placeholder="Agregar el correo del empleado" value="{{ $empleado->email }}">
                                </div>
                                <br>
                                <div>
                                    <label for="idRolEmpleado" class="block text-sm font-medium teext-gray-700 form-lavel">Rol del empleado </label>
                                    <select name="idRolEmpleado" id="idRolEmpleado" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control">
                                        @foreach ($roles as $rol)
                                            @if ($rol->id == $empleado->idRolEmpleado)
                                                <option value="{{ $rol->id }}" selected>{{ $rol->nombre }}</option>
                                            @else
                                                <option value="{{ $rol->id }}">{{ $rol->nombre }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <label for="foto" class="block text-sm font-medium teext-gray-700 form-lavel">Foto </label>
                                    <input type="file" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="foto" id="foto" placeholder="Adjuntar foto del empleado">
                                </div>
                                <br> <br>
                                <br> <br>
                                <div>
                                    <button class="button-delete ">
                                        <a href="{{ url('/administrador/empleados') }}">Cancelar</a>
                                    </button>
                                    <button class="button-update" type="submit">Actualizar</button>
                                </div>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
