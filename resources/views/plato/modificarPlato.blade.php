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
                    <br>
                    <h1>Modificar Plato</h1>
                    <br>
                    <p>En esta sección se pueden modificar los platos del menú</p>
                    <div class="mt-6">
                        <form action="{{url('plato/'.$plato->id)}}" class="space-y-1" method="POST" enctype="multipart/form-data">
                        @method('PUT')    
                        @csrf
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
                                <div>
                                    <label for="nombrePlato" class="block text-sm font-medium teext-gray-700 form-lavel">Nombre del plato </label>
                                    <input value="{{$plato->nombrePlato}}" type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="nombrePlato" id="nombrePlato" placeholder="Agregar nombre del plato">
                                </div>
                                <br>
                                <div>
                                    <label for="precio" class="block text-sm font-medium teext-gray-700 form-lavel">Precio </label>
                                    <input value="{{$plato->precio}}" type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="precio" id="precio" placeholder="Agregar precio del plato">
                                </div>
                                <br>
                                <div>
                                    <label for="imagen" class="block text-sm font-medium teext-gray-700 form-lavel">Imagen </label>
                                    <input value="" type="file" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="imagen" id="imagen" placeholder="Agregar precio del plato">
                                </div>
                                <br> <br>
                                <br> <br>
                                <div>
                                    <button class="button-delete ">
                                        <a href="{{ url('cocinero') }}">Cancelar</a>
                                    </button>
                                    <button class="button-update" type="submit">Guardar</button>
                                </div>

                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app-layout>