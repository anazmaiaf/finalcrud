<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="pt-10 pb-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex flex justify-between items-center">
                    <strong>Produtos</strong>
                    <a href="/">
                        <button type="button" class="pink-button focus:outline-none text-white focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5">
                            Criar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div> 

    @if(session('deleted'))
    <div class="sm:px-6 lg:px-8 flex justify-center items-center w-full mb-5">
        <div class="inline-block w-auto p-4 text-sm text-red-900 rounded-lg bg-red-200 border border-red-400" role="alert" style="max-width: fit-content;">
            <span class="font-medium">{{ session('deleted') }}</span>
        </div>
    </div>
    @endif

    @if(session('success'))
    <div class="sm:px-6 lg:px-8 flex justify-center items-center w-full mb-5">
        <div class="inline-block w-auto p-4 text-sm text-green-900 rounded-lg bg-green-200 border border-green-400" role="alert" style="display: inline-block; max-width: fit-content;">
                <span class="font-medium">{{ session('success') }}</span>
            </div>
        </div>
    @endif

    @if ($produtos->count() === 0)
        <div class="flex justify-center mb-4">
            <p class="text-lg font-semibold text-gray-700">Você ainda não possui produtos.</p>
        </div>
    @else
    @endif

    </x-app-layout>