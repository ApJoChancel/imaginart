<x-guest-layout>
    <form method="POST" action="{{ route('registerStepTwo') }}">
        @csrf

        <!-- Type d'utilisateur -->
        <div class="mt-4">
            <x-input-label :value="__('Vous êtes')" />
            @foreach ($options as $option)
                <x-text-input name='type' class="mt-1" type="radio" value="{{ $option }}" />
                <x-input-label value="{{ $option }}" style="display: inline-block"/>
                <br>
            @endforeach
        </div>


        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Suivant') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
