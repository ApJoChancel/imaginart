<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vos oeuvres') }}
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('oeuvres.create') }}">
                <x-primary-button>{{ __('Ajouter') }}</x-primary-button>
            </a>                 
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <x-table.table :headers="$headers">
                        @foreach ($items as $item)
                            <tr class="border-2">
                                <x-table.td>#{{ $i++ }}</x-table.td>
                                <x-table.td><img src="{{ asset($item->picture) }}" alt="Image de l'oeuvre" width="50px"></x-table.td>
                                <x-table.td>{{ $item->title }}</x-table.td>
                                <x-table.td>{{ $item->categorie }}</x-table.td>
                                <x-table.td>{{ $item->artist_price }}</x-table.td>
                                <x-table.td>{{ $item->sale_price }}</x-table.td>
                                <x-table.td align="right">
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('oeuvres.show', ['oeuvre' => $item->id]) }}">
                                        <x-secondary-button>{{ __('Voir') }}</x-secondary-button>
                                    </a>
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('oeuvres.edit', ['oeuvre' => $item->id]) }}">
                                        <x-primary-button>{{ __('Editer') }}</x-primary-button>
                                    </a>
                                    <form method="POST" action="{{ route('oeuvres.destroy', ['oeuvre' => $item->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action ?')">
                                        @csrf
                                        @method('delete')
                            
                                        <div>
                                            <x-danger-button>
                                                {{ __('Supprimer') }}
                                            </x-danger-button>
                                        </div>
                                    </form>
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-table.table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>