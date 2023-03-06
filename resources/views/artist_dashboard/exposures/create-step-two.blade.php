<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une exposition') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="post" action="{{ route('exposureStepTwo') }}" class="mt-6 space-y-6">
                @csrf
        
                <!-- Artworks -->
                <div>
                    <x-input-label for="artworks" :value="__('Sélectionnez les oeuvres à exposer')" />
                    @foreach ($artworks as $artwork)
                        <x-text-input name='artworks[]' class="mt-1" type="checkbox" value="{{ $artwork->id }}" />
                        <x-input-label value="{{ $artwork->title }}" style="display: inline-block"/>
                        <br>
                    @endforeach
                    <x-input-error class="mt-2" :messages="$errors->get('artworks')" />
                </div>
        
                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Enregistrer') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
