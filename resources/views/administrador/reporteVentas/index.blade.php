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
                    {{ __("Reporte de ventas") }}
                    <br><br>
                    <center>
                        <button class="button-read ">
                            <a href="{{ url('/administrador/ventas/dia') }}">Día</a>
                        </button>
                        <button class="button-read ">
                            <a href="{{ url('/administrador/ventas/mes') }}">Mes</a>
                        </button>
                        <button class="button-read ">
                            <a href="{{ url('/administrador/ventas/ano') }}">Año</a>
                        </button>
                        <br><br>
                    </center>
                    <br><br>  
                    <button class="button-delete">
                        <a href="{{ url('/administrador') }}">Regresar</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>