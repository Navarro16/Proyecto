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
                    {{ __("Iniciaste sesión como administrador!") }}
                    <br><br>
                    <div class="flex  justify-center items-center place-content-center">
                        <button class="btn-custom button-primary w-64">
                            <a href="{{ url('/administrador/empleados') }}">Gestionar personal</a>
                        </button>
                    </div>
                    </br>
                    <div class="flex  justify-center items-center place-content-center">
                        <button class="btn-custom button-primary w-64">
                            <a href="{{ url('/administrador/reservaLocal') }}">Gestionar reseva local</a>
                        </button>
                    </div>
                    </br>
                    <div class="flex  justify-center items-center place-content-center">
                        <button class="btn-custom button-primary w-64">
                            <a href="{{ url('/administrador/ventas') }}">Reporte de ventas</a>
                        </button>
                    </div>
                    </br>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
