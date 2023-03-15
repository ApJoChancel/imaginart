<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Détails') }}               
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table.table :headers="$headers">
                        <tr class="border-2">
                            <x-table.td><img src="{{ asset($item->picture) }}" alt="Image de l'oeuvre" width="50px"></x-table.td>
                            <x-table.td>{{ $item->title }}</x-table.td>
                            <x-table.td>{{ $item->sale_price }}</x-table.td>
                            <x-table.td>
                                <x-primary-button item-id="{{ $item->id }}" class="addToCart">{{ __('Ajouter au panier') }}</x-primary-button>
                            </x-table.td>
                        </tr>
                    </x-table.table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>