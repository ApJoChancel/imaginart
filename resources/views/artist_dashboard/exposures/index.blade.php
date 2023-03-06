<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vos expositions') }}
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('exposureStepOne') }}">
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
                            @php
                                $status = null;
                                switch ($item->status) {
                                    case 0:
                                        $status = 'À venir';
                                        break;
                                    case 1:
                                        $status = 'En cours';
                                        break;
                                    case 2:
                                        $status = 'Terminée';
                                        break;
                                    default:
                                        $status = 'Inconnu';
                                        break;
                                }
                            @endphp
                            <tr class="border-2">
                                <x-table.td>#{{ $i++ }}</x-table.td>
                                <x-table.td>{{ $item->title }}</x-table.td>
                                <x-table.td>{{ $item->start }}</x-table.td>
                                <x-table.td>{{ $item->end }}</x-table.td>
                                <x-table.td>{{ $status }}</x-table.td>
                                <x-table.td align="right">
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('expositions.show', ['exposition' => $item->id]) }}">
                                        <x-secondary-button>{{ __('Voir') }}</x-secondary-button>
                                    </a>
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('expositions.edit', ['exposition' => $item->id]) }}">
                                        <x-primary-button>{{ __('Editer') }}</x-primary-button>
                                    </a>
                                    <form method="POST" action="{{ route('expositions.destroy', ['exposition' => $item->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action ?')">
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