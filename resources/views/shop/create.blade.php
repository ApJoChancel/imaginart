<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Votre panier') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="flex h-full flex-col bg-white shadow-xl">
                <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                    <div class="mt-8">
                        <div class="flow-root">
                            <ul role="list" class="-my-6 divide-y divide-gray-200">
                                @foreach ($items as $item)
                                <li class="section flex py-6">
                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                        <img src="{{ asset($item->picture) }}" class="h-full w-full object-cover object-center">
                                    </div>
            
                                    <div class="ml-4 flex flex-1 flex-col">
                                        <div>
                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                <h3>{{$item->title }}</h3>
                                                <p class="amount ml-4">{{ number_format($item->amount, 0, ',', ' ') .' F CFA' }}</p>
                                            </div>
                                            <p class="mt-1 text-sm text-gray-500">{{ number_format($item->price, 0, ',', ' ') .' F CFA' }}</p>
                                        </div>
                                        <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">
                                            <button type="button" item-id="{{ $item->id }}" class="btnless font-medium text-xl text-indigo-600 hover:text-indigo-500">-</button>
                                            <span class="qty">{{ $item->quantity }}</span>
                                            <button type="button" item-id="{{ $item->id }}" class="btnmore font-medium text-xl text-indigo-600 hover:text-indigo-500">+</button>
                                        </p>
                
                                        <div class="flex">
                                            <button type="button" item-id="{{ $item->id }}" class="btndelete font-medium text-indigo-600 hover:text-indigo-500">Supprimer</button>
                                        </div>
                                        </div>
                                    </div>
                                </li> 
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
    
                <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
                    <div class="flex justify-between text-base font-medium text-gray-900">
                        <p>Sous-total</p>
                        <p id="amount">{{ number_format($items->sum('amount'), 0, ',', ' ') .' F CFA' }}</p>
                    </div>
                    <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                    <div class="mt-6">
                        <a href="#" class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Checkout</a>
                    </div>
                    <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                        <p>
                            or
                            <a href="{{ route('shop') }}">
                                <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    Continue Shopping
                                    <span aria-hidden="true"> &rarr;</span>
                                </button>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
