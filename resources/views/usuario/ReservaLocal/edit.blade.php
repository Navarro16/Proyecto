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
                    {{ __("Reserva del local entero") }}
                    <br><br>
                    <p>En esta sección como usuario puedes editar la reservas para el local entero</p>
                    <br>
                    <form action="{{ url('/usuario/reservaLocal/'. $reservaLocal->id .'/update') }}" class="space-y-1" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf  
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">

                                <div>
                                    <label for="cedula" class="block text-sm font-medium teext-gray-700 form-lavel">Cédula </label>
                                    <input type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="cedula" id="cedula" placeholder="cedula" value="{{ Auth::user()->cedula }}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label for="nombreCliente" class="block text-sm font-medium teext-gray-700 form-lavel">Nombre </label>
                                    <input type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="nombreCliente" id="nombreCliente" placeholder="Nombre Completo" value="{{ Auth::user()->nombre." ".Auth::user()->apellidos }}" readonly>
                                </div>
                                <br>
                                <div>
                                    <label for="fechaReservaLocal" class="block text-sm font-medium teext-gray-700 form-lavel">Fecha de reserva de local </label>
                                    <input type="date" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="fechaReservaLocal" id="fechaReservaLocal" value="{{ $reservaLocal->fechaReservaLocal  }}">
                                </div>
                                <br> <br>
                                <br> <br>
                                <div>
                                    <button class="button-delete ">
                                        <a href="{{ url('/usuario/reservaLocal') }}">Regresar</a>
                                    </button>
                                    <button class="button-update" type="submit">Modificar</button>
                                </div>

                            </div>

                        </form>
                    </br>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>