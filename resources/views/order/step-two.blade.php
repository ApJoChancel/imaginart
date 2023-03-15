<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adresse de livraison') }}               
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Adresse de livraison</h2>
                    <form method="POST" action="{{ route('orderStepTwo') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nom(s) et prénom(s)')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Country -->
                        <div class="mt-4">
                            <x-input-label for="country" :value="__('Pays')" />
                            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                
                        <!-- Address -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Adresse')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>

                        <!-- Comment -->
                        <div>
                            <x-input-label for="comment" :value="__('Commentaires')" />
                            <x-textarea id="comment" class="block mt-1 w-full" name="comment" placeholder="Informations suplémentaires pour assurer une livraison en toute sécurité" >{{ old('comment') }}</x-textarea>
                            <x-input-error :messages="$errors->get('comment')" class="mt-2" />
                        </div>
                
                
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Continuer') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
