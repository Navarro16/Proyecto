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
                    {{ __("Iniciaste sesión como Usuario!") }}
                    <br>
                </div>
                <spam> Como usuario de nuestro sistema puedes realizar las siguientes acciones:</spam>
            </div>
            <br> <br>
            <div class="container">
                <div class="h-screen flex items-start justify-center gap-7">
                    <div class="bg-red-100 card">
                        <img class="w-full h-full object-cover" src="img/pedido.jpg" alt="Pedidos" />
                        <div class="p-5 flex-col gap-3">
                            <div class="flex items-center gap-2">
                                <h2 class="title-card">Haz tu Pedido</h2>
                                <br>
                            </div>
                            <spam class="text-sm  opacity-80">Puedes hacer el pedido seleccionando los diferentes platos que tenemos para ti.</spam>
                            <br><br>
                            <button class="btn-custom button-primary">
                                <a href="{{ url('usuario/hacerPedido') }}">Hacer Pedido</a>
                            </button>
                        </div>
                    </div>
                    <div class="bg-red-100 card">
                        <img class="w-full h-full object-cover" src="img/reserved-mesa.jpg" alt="Reserva Mesa">
                        <div class="p-5 flex-col gap-3">
                            <div class="flex items-center gap-2">
                                <h2 class="title-card">Reserva tu Mesa</h2>
                                <br>
                            </div>
                            <spam class="text-sm  opacity-80">Puedes hacer con anticipación la reserva de cualquier mesa del local.</spam>
                            <br><br>
                            <button class="btn-custom button-primary">
                                Hacer Reserva
                            </button>
                        </div>
                    </div>
                    <div class="bg-red-100 card">
                        <img class="w-full h-full object-cover" src="img/reserved-local.jpg" alt="Reserva Local">
                        <div class="p-5 flex-col gap-3">
                            <div class="flex items-center gap-2">
                                <h2 class="title-card">Reserva el Local</h2>
                                <br>
                            </div>
                            <spam class="text-sm  opacity-80">Puedes hacer con anticipacion la reservar de todo el local .</spam>
                            <br><br>
                            <button class="btn-custom button-primary">
                                <a href="{{ url('/usuario/reservaLocal') }}">Hacer reserva</a>
                            </button>
                        </div>
                    </div>
                    <div class="bg-red-100 card">
                        <img class="w-full h-full object-cover" src="img/imagenCarta.jpg" alt="Ver Menú">
                        <div class="p-5 flex-col gap-3">
                            <div class="flex items-center gap-2">
                                <h2 class="title-card">Ver menú</h2>
                                <br>
                            </div>
                            <spam class="text-sm  opacity-80">Puedes visualizar nuestro menú disponible para ti</spam>
                            <br><br>
                            <button class="btn-custom button-primary">
                                <a href="{{ url('usuario/verMenu') }}">Ver Menú</a>
                            </button>
                        </div>
                    </div>
                    <div class="bg-red-100 card">
                        <img class="w-full h-full object-cover" src="img/gestionar-pedido.jpg" alt="Ver Menú">
                        <div class="p-5 flex-col gap-3">
                            <div class="flex items-center gap-2">
                                <h2 class="title-card">Gestiona tu pedido</h2>
                                <br>
                            </div>
                            <spam class="text-sm  opacity-80">Puedes visualizar los menús que has realizado</spam>
                            <br><br>
                            <button class="btn-custom button-primary">
                                <a href="{{ url('usuario/gestionarPedidos') }}">Gestionar Pedido</a>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>