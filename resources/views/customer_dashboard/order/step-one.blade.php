<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paiement sécurisé en 4 étapes') }}               
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2>Vous avez un compte</h2>
                    <p>
                        Si vous êtes déjà inscrit sur Imagin'Art, alors connectez-vous ici
                        <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            <x-secondary-button>{{ __('Connexion') }}</x-secondary-button>
                        </a>
                    </p>
                    <hr>
                    <h2>Départ en tant qu'invité</h2>
                    <p>Vous pouvez vous inscrire pour enregistrer vos informations</p>
                    <form method="POST" action="{{ route('order') }}">
                        @csrf
                
                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Nom(s) et prénom(s)')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                
                        <!-- Country -->
                        <div class="mt-4">
                            <x-input-label for="country" :value="__('Pays de résidence')" />
                            <x-text-input id="country" class="block mt-1 w-full" type="text" name="country" :value="old('country')" required />
                            <x-input-error :messages="$errors->get('country')" class="mt-2" />
                        </div>
                
                        <!-- Address -->
                        <div class="mt-4">
                            <x-input-label for="address" :value="__('Adresse')" />
                            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                            <x-input-error :messages="$errors->get('address')" class="mt-2" />
                        </div>
                
                        <!-- Phone -->
                        <div class="mt-4">
                            <x-input-label for="phone" :value="__('N° de téléphone')" />
                            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
                            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
                        </div>

                        <!-- Inscription -->
                        <div class="block mt-4">
                            <label for="register" class="inline-flex items-center">
                                <input id="register" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="register">
                                <span class="ml-2 text-sm text-gray-600">{{ __('J\'en profite pour m\'inscrire') }}</span>
                            </label>
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
