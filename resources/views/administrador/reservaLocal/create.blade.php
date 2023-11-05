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
                    <h1 class="font-semibold text-xl text-gray-800 leading-tight">Crear reserva del local</h1>
                    <br>
                    <p>En esta sección se pueden agregar reservas para el local</p>
                    <div class="mt-6">
                        <form action="{{ url('/administrador/reservaLocal/store') }}" class="space-y-1" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
                                <div>
                                    <label for="cedula" class="block text-sm font-medium teext-gray-700 form-lavel">Nombre del cliente </label>
                                    <select name="cedula" id="cedula" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control">
                                        @foreach ($clientes as $cliente)
                                            <option value="{{ $cliente->cedula }}">{{ $cliente->nombre." ".$cliente->apellidos }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <br>
                                <div>
                                    <label for="fechaReservaLocal" class="block text-sm font-medium teext-gray-700 form-lavel">Fecha de reserva de local </label>
                                    <input type="date" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="fechaReservaLocal" id="fechaReservaLocal">
                                </div>
                                <br> <br>
                                <br> <br>
                                <div>
                                    <button class="button-delete ">
                                        <a href="{{ url('/administrador/reservaLocal') }}">Cancelar</a>
                                    </button>
                                    <button class="button-update" type="submit">Crear</button>
                                </div>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>
