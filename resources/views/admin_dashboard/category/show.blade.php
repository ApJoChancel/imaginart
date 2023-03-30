<x-app-layout> 
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Styles, techniques et thèmes de la catégorie') }}               
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Styles') }}               
                    </h3>
                    <x-table.table :headers="$headers">
                        @foreach ($styles as $item)
                            <tr class="border-2">
                                <x-table.td>{{ $item->name }}</x-table.td>
                                <x-table.td>
                                    <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('category.edit.categories', ['parent' => $parent, 'module' => 'style', 'category' => $item->id]) }}">
                                        <x-primary-button>{{ __('Editer') }}</x-primary-button>
                                    </a>
                                    <form method="POST" action="{{ route('category.destroy.categories', ['parent' => $parent, 'module' => 'style', 'category' => $item->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action ?')">
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
                </div>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Techniques') }}               
                        </h3>
                        <x-table.table :headers="$headers">
                            @foreach ($technics as $item)
                                <tr class="border-2">
                                    <x-table.td>{{ $item->name }}</x-table.td>
                                    <x-table.td>
                                        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('category.edit.categories', ['parent' => $parent, 'module' => 'technic', 'category' => $item->id]) }}">
                                            <x-primary-button>{{ __('Editer') }}</x-primary-button>
                                        </a>
                                        <form method="POST" action="{{ route('category.destroy.categories', ['parent' => $parent, 'module' => 'technic', 'category' => $item->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action ?')">
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
                    </div>
                </div>
            </div>

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <h3 class="font-semibold text-xl text-gray-800 leading-tight">
                                {{ __('Thèmes') }}               
                            </h3>
                            <x-table.table :headers="$headers">
                                @foreach ($themes as $item)
                                    <tr class="border-2">
                                        <x-table.td>{{ $item->name }}</x-table.td>
                                        <x-table.td>
                                            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('category.edit.categories', ['parent' => $parent, 'module' => 'theme', 'category' => $item->id]) }}">
                                                <x-primary-button>{{ __('Editer') }}</x-primary-button>
                                            </a>
                                            <form method="POST" action="{{ route('category.destroy.categories', ['parent' => $parent, 'module' => 'theme', 'category' => $item->id]) }}" style="display: inline-block" onsubmit="return confirm('Voulez-vous vraiment effectuer cette action ?')">
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
                        </div>
                    </div>
                </div>
    </div>
</x-app-layout>