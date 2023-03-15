<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les options d\'expédition') }}               
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table.table :headers="$headers">
                        @foreach ($items as $item)
                            <tr class="border-2">
                                <x-table.td><img src="{{ asset($item->picture) }}" alt="Image de l'oeuvre" width="50px"></x-table.td>
                                <x-table.td>{{ $item->title }}</x-table.td>
                                <x-table.td>{{ $item->quantity }}</x-table.td>
                                <x-table.td>{{ $item->price }}</x-table.td>
                                <x-table.td>{{ $item->shipped_from }}</x-table.td>
                                <x-table.td>{{ $item->delivery_charges }}</x-table.td>
                            </tr>
                        @endforeach
                    </x-table.table>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('orderStepFour') }}">
                        {{ __('Continuer') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
