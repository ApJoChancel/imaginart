<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une exposition') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="post" action="{{ route('exposureStepOne') }}" class="mt-6 space-y-6">
                @csrf
        
                <!-- Title -->
                <div>
                    <x-input-label for="title" :value="__('Titre')" />
                    <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title')" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('title')" />
                </div>
        
                <!-- Description -->
                <div>
                    <x-input-label for="description" :value="__('Description')" />
                    <x-textarea id="description" class="block mt-1 w-full" name="description" required>{{ old('description') }}</x-textarea>
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <!-- Target -->
                <div>
                    <x-input-label for="target" :value="__('Objectif')" />
                    <x-text-input id="target" name="target" type="text" class="mt-1 block w-full" :value="old('target')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('target')" />
                </div>

                <!-- Start -->
                <div>
                    <x-input-label for="start" :value="__('Début')" />
                    <x-text-input id="start" name="start" type="date" class="mt-1 block w-full" :value="old('start')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('start')" />
                </div>

                <!-- End -->
                <div>
                    <x-input-label for="end" :value="__('Fin')" />
                    <x-text-input id="end" name="end" type="date" class="mt-1 block w-full" :value="old('end')" required />
                    <x-input-error class="mt-2" :messages="$errors->get('end')" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Suivant') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
