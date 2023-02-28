<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        @method('patch')

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <!-- Email -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <!-- Country -->
        <div>
            <x-input-label for="country" :value="__('Pays de résidence')" />
            <x-text-input id="country" name="country" type="text" class="mt-1 block w-full" :value="old('country', $user->country)" required />
            <x-input-error class="mt-2" :messages="$errors->get('country')" />
        </div>

        <!-- Address -->
        <div>
            <x-input-label for="address" :value="__('Adresse')" />
            <x-text-input id="address" name="address" type="text" class="mt-1 block w-full" :value="old('address', $user->address)" required />
            <x-input-error class="mt-2" :messages="$errors->get('address')" />
        </div>

        <!-- Phone -->
        <div>
            <x-input-label for="phone" :value="__('N° de téléphone')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->phone)" required />
            <x-input-error class="mt-2" :messages="$errors->get('phone')" />
        </div>

        @if (strtolower($user->type) === 'artiste')
            <!-- Presentation -->
            <div>
                <x-input-label for="presentation" :value="__('Votre présentation')" />
                <x-textarea id="presentation" name="presentation" class="block mt-1 w-full" required>{{ old('presentation', $user->presentation) }}</x-textarea>
                <x-input-error class="mt-2" :messages="$errors->get('presentation')" />
            </div>

            <!-- Artistic process -->
            <div>
                <x-input-label for="artistic_process" :value="__('Votre démarche artistique')" />
                <x-textarea id="artistic_process" name="artistic_process" class="block mt-1 w-full" required>{{ old('artistic_process', $user->artistic_process) }}</x-textarea>
                <x-input-error class="mt-2" :messages="$errors->get('artistic_process')" />
            </div>

            <!-- Picture -->
        <div class="mt-4">
            <x-input-label for="picture" :value="__('Une photo')" />
            <x-text-input id="picture" class="block mt-1 w-full" type="file" name="picture" accept="image/*" />
            <x-input-error :messages="$errors->get('picture')" class="mt-2" />
        </div>
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Sauvegarder') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
