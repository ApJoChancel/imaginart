<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier une artwork') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="post" action="{{ route('oeuvres.update', ['oeuvre' => $item->id]) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                @csrf
                @method('put')
                
                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Titre')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $item->title)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-textarea id="description" class="block mt-1 w-full" name="description">{{ old('description', $item->description) }}</x-textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Picture -->
                <div class="mt-4">
                    <x-input-label for="picture" :value="__('Image de l\'oeuvre')" />
                    <x-text-input id="picture" class="block mt-1 w-full" type="file" name="picture" accept="image/*" />
                    <x-input-error :messages="$errors->get('picture')" class="mt-2" />
                </div>

                <!-- Dimension -->
                <div>
                    <x-input-label for="dimension" :value="__('Dimension')" />
                    <x-text-input id="dimension" name="dimension" type="text" class="mt-1 block w-full" :value="old('dimension', $item->dimension)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('dimension')" />
                </div>

                <!-- Creation date -->
                <div>
                    <x-input-label for="creation_date" :value="__('Année de création')" />
                    <x-text-input id="creation_date" name="creation_date" type="text" class="mt-1 block w-full" :value="old('creation_date', $item->creation_date)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('creation_date')" />
                </div>
        
                <!-- Artist price -->
                <div>
                    <x-input-label for="price" :value="__('Votre prix')" />
                    <x-text-input id="price" name="artist_price" type="text" class="mt-1 block w-full" :value="old('artist_price', $item->artist_price)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('artist_price')" />
                </div>

                <!-- Sale price -->
                <div>
                    <x-input-label for="sprice" :value="__('Prix de vente')" />
                    <x-text-input id="sprice" name="sale_price" type="text" class="mt-1 block w-full" :value="old('sale_price', $item->sale_price)" required readonly />
                    <x-input-error class="mt-2" :messages="$errors->get('sale_price')" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Modifier') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
