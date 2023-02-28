<x-guest-layout>
    <form method="POST" action="{{ route('registerStepThree') }}" enctype="multipart/form-data">
        @csrf

        <!-- option -->
        <div class="mt-4">
            <x-input-label :value="__('Quel type d\'artiste êtes-vous ?')" />
            @foreach ($options as $option)
                <x-text-input name='options[]' class="mt-1" type="checkbox" value="{{ $option->id }}" />
                <x-input-label value="{{ $option->name }}" style="display: inline-block"/>
                <br>
            @endforeach
            <x-input-error :messages="$errors->get('options')" class="mt-2" />
        </div>

        <!-- Presentation -->
        <div>
            <x-input-label for="presentation" :value="__('Une description de qui vous êtes')" />
            <x-textarea id="presentation" class="block mt-1 w-full" name="presentation" :value="old('presentation')" />
            <x-input-error :messages="$errors->get('presentation')" class="mt-2" />
        </div>

        <!-- Artistic process -->
        <div class="mt-4">
            <x-input-label for="artistic" :value="__('Votre démarche artistique')" />
            <x-textarea id="artistic" class="block mt-1 w-full" name="artistic" :value="old('artistic')" />
            <x-input-error :messages="$errors->get('artistic')" class="mt-2" />
        </div>

        <!-- Picture -->
        <div class="mt-4">
            <x-input-label for="picture" :value="__('Une photo')" />
            <x-text-input id="picture" class="block mt-1 w-full" type="file" name="picture" required accept="image/*" />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('S\'inscrire') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
