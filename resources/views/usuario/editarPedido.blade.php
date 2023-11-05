<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FOM Usuario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 title-card">
                    {{ __('Hola Usuario!') }}
                    <br>
                </div>
                <h1>Modifica tu pedido</h1>
                <spam> A continuación puedes modificar los platos que deseas para tu pedido</spam>

                <br> <br>
                <div class="mt-6">
                        <form action="{{url('pedido/'.$pedido->id)}}" class="space-y-1" method="POST" enctype="multipart/form-data">
                        @method('PUT')    
                        @csrf
                            <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-3">
                                <div>
                                    <label for="cedulaUsuario" class="block text-sm font-medium teext-gray-700 form-lavel">cedula Usuario</label>
                                    <input value="{{$pedido->cedulaUsuario = Auth::user()->cedula}}" type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="cedulaUsuario" id="cedulaUsuario">
                                </div>
                                <br>
                                <div>
                                    <label for="idMesa" class="block text-sm font-medium teext-gray-700 form-lavel">idMesa </label>
                                    <input value="{{$pedido->idMesa}}" type="text" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="idMesa" id="idMesa" placeholder="Agregar precio del plato">
                                </div>
                                <br>
                                <div>
                                    <label for="idPlato " class="block text-sm font-medium teext-gray-700 form-lavel">idPlato  </label>
                                    <input value="{{$pedido->idPlato}}" type="file" class="mt-2 shadow appearence-none border rounded w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline form-control" name="idPlato " id="idPlato " placeholder="Agregar precio del plato">
                                </div>
                                <br> <br>
                                <br> <br>
                                <div>
                                    <button class="button-delete ">
                                        <a href="{{ url('usuario') }}">Cancelar</a>
                                    </button>
                                    <button class="button-update" type="submit">Guardar</button>
                                </div>

                            </div>

                        </form>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
