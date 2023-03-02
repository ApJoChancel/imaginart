<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier une oeuvre') }}
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
        
                <!-- Categorie -->
                <div class="mt-4">
                    <x-input-label :value="__('Catégorie')" />
                    <x-forms.select id="categorie" class="block mt-1 w-full" name='categorie' required>
                        <option></option>
                        @foreach ($categories as $categorie)
                            <option @selected(old('categorie', $item->oeuvre_category_id) == $categorie->id) value="{{ $categorie->id }}">
                                {{ $categorie->name }}
                            </option>
                        @endforeach
                    </x-forms.select>
                    <x-input-error :messages="$errors->get('categorie')" class="mt-2" />
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
        
                <!-- Artist price -->
                <div>
                    <x-input-label for="price" :value="__('Votre prix (F CFA)')" />
                    <x-text-input id="price" name="artist_price" type="text" class="mt-1 block w-full" :value="old('artist_price', $item->artist_price)" required />
                    <x-input-error class="mt-2" :messages="$errors->get('artist_price')" />
                </div>

                <!-- Sale price -->
                <div>
                    <x-input-label for="sprice" :value="__('Prix de vente (F CFA)')" />
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
