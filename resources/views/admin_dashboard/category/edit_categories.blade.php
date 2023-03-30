<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modifier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form method="post" action="{{ route('category.update.categories', ['parent' => $parent, 'module' => $module, 'category' => $item->id]) }}" class="mt-6 space-y-6">
                @csrf
                @method('put')
                
                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Libellé')" />
                    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $item->name)" required autofocus />
                    <x-input-error class="mt-2" :messages="$errors->get('name')" />
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
