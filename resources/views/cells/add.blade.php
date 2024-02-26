<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Početna-Šifre-Dodavanje') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_cell') }}">
                        @csrf
                        <div>
                            <x-label for="wardNO" value="{{ __('Blok') }}" />
                            <x-input id="wardNO" class="block mt-1 w-full" type="text" name="wardNO" :value="old('wardNO')" required autofocus />
                        </div>
                        <div>
                            <x-label for="floor" value="{{ __('Sprat') }}" />
                            <x-input id="floor" class="block mt-1 w-full" type="text" name="floor" :value="old('cellNumber')" required autofocus />
                        </div>
                        
                        
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>